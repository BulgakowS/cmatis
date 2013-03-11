<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * home actions.
 *
 * @package    cmatis
 * @subpackage home
 * @author     BulgakowS <bulgakows@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	if ( !$request->hasParameter('sf_culture') )
	{
      $user = $this->getUser();
	  if ($user->isFirstRequest())
	  {
	    $culture = $request->getPreferredCulture(array('ru', 'uk', 'en'));
	    $user->setCulture($culture);
	    $user->isFirstRequest(false);
	  } else {
	    $culture = $user->getCulture();
	  }
      $user->setFlash('error', $user->getFlash('error'));
      $user->setFlash('success', $user->getFlash('success'));
	  $this->redirect('localized_homepage');
	}   
    
    $this->lastArticles = ArticleTable::getLastForMain();
    $this->lastCategories = CategoryTable::getLastForMain();
    $this->about = AboutTable::getAbout();
    
	$response = $this->getResponse();
	$response->addMeta('title', 'Cmatis');
    $response->addMeta('keywords', '');
  }
}
