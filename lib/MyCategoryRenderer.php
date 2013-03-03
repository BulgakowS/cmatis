<?php
class MyCategoryRenderer extends sfWidgetFormSelect

{
     public function render($name, $value = null, $attributes = array(), $errors = array())
     {
        $choices = $this->getChoices();
        $attributes = array_merge(array('name' => $name), $attributes);
        $attributes = $this->fixFormId($attributes);
        
        $attributesString = ' ';
        foreach($attributes as $key => $name)
        {
            $attributesString .= " {$key}='{$name}' ";
        }

        $categories = Doctrine_core::getTable('Category')->createQuery('c')
                    ->leftJoin('c.Translation t')
                    ->AndWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                    ->orderBy('c.position')
                    ->execute();

        $out = "<select {$attributesString}>";
        $out .= "<option value='0'>".__('main')."</option>";
        foreach($categories as $category)
        {
            if(!$category->isSubcategory())
            {
                $selected = $this->_getSelected($category->getId(), $value);
                $out .= "<option value='{$category->getId()}' {$selected}>{$category->getName()}</option>";
                foreach($category->getSubs() as $sub1)
                {
                    // для подкатегорий добавляется класс 'child'
                    $selected1 = $this->_getSelected($sub1->getId(), $value);
                    $out .= "<option value='{$sub1->getId()}' {$selected1} class='child'>- {$sub1->getName()}</option>";
                    foreach($sub1->getSubs() as $sub2)
                    {
                        $selected2 = $this->_getSelected($sub2->getId(), $value);
                        $out .= "<option value='{$sub2->getId()}' {$selected2} class='sub_child'>- - {$sub2->getName()}</option>";
                        foreach($sub2->getSubs() as $sub3)
                        {
                            $selected3 = $this->_getSelected($sub3->getId(), $value);
                            $out .= "<option value='{$sub3->getId()}' {$selected3} class='sub_child'>- - {$sub3->getName()}</option>";
                        }
                    }
                }
            }
        }
        $out .= "</select>";
        return $out;
    }
    
    // Специальный метод, который возвращает значение атрибута selected.

    private function _getSelected($key, $value)
    {
        $selected = '';
        if ($value){
            if( (int)$key ==  (int)$value )
            {
                $selected = "selected='selected'";
            }
        }
        return $selected;
    }
}
