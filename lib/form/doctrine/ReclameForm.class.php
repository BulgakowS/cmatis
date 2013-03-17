<?php

/**
 * Reclame form.
 *
 * @package    cmatis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReclameForm extends BaseReclameForm
{
  public function configure()
  {
      unset($this['position'], $this['title']);
  }
}
