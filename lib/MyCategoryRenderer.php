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

        $roots = CategoryTable::getRoots();

        $out = "<select {$attributesString}>";

        if ($name != "article_category_id")
            $out .= "<option value='0'>".__('main')."</option>";
        
        foreach($roots as $category)
        {
            $selected = $this->_getSelected($category->getId(), $value);
            $out .= "<option value='{$category->getId()}' {$selected}>{$category->getName()}</option>";
            $this->renderSubs($category);
        }
        $out .= "</select>";
        return $out;
    }
    
    private function renderSubs($cat)
    {
        if ( $cat->chieldcount > 0 ){
            
        }
    }
    
    // Специальный метод, который возвращает значение атрибута selected.
    private function _getSelected($key, $value)
    {
        $selected = '';
        if ($value) {
            if( (int)$key ==  (int)$value )
            {
                $selected = " selected='selected' ";
            }
        }
        return $selected;
    }
}
