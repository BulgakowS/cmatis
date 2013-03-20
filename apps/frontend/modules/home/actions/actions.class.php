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
          $this->reclame_big = Doctrine::getTable('Reclame')->findOneByPosition(1);
          $this->reclame_bottom = Doctrine::getTable('Reclame')->findOneByPosition(2);

          $response = $this->getResponse();
          $response->addMeta('title', 'Cmatis');
          $response->addMeta('keywords', '');
    }
  
    public function executeSitemap(sfWebRequest $request) {
          $this->roots = CategoryTable::getAllRoots();
          $response = $this->getResponse();
          $response->addMeta('title', 'Cmatis - ' . __('site_tree') );
          $response->addMeta('keywords', __('site_tree'));
    }
    
    public function executeEditsetting(sfWebRequest $request) {
          $this->forward404If(!$this->getUser()->isAuthenticated());
          
          $this->form = new SettingForm( SettingTable::getSetting() );
      
          if ( $request->isMethod('POST') ) {

            $this->form->bind($request->getParameter($this->form->getName())); 
            if ($this->form->isValid()) {
                $cat = $this->form->save();            
                $this->getUser()->setFlash('success', __('changed_saved'));

                $this->redirect('@homepage');
            } 
          }
    }
  
    /**
     * Executes page404 action
     *
     * You can also use $this->forward404If() to force a 404 to this action.
     *
     * @param void
     * @return void
     * @access public
     */
    public function executePage404(sfWebRequest $request) 
    {
        $this->setLayout('layout');
    }
}
