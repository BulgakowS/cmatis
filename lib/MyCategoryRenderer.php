<?php
class MyCategoryRenderer extends sfWidgetFormSelect
{
    private $out = '';


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
            $out .= $this->renderSubs($category, $value);
            $this->out = '';
        }
        $out .= "</select>";
        return $out;
    }
    
    private function renderSubs($cat, $selected_id, $out='')
    {
        if ( $cat->getChieldscount() > 0 ) {
            foreach ( $cat->getSubs() as $sub ) {
                $selected = $this->_getSelected($sub->getId(), $selected_id);
                $this->out .= "<option value='{$sub->getId()}' {$selected}>";
                $this->out .= str_repeat ( '-' , $sub->getLevel() ) . '&nbsp';
                $this->out .= "{$sub->getName()}</option>";
                if ( $sub->getChieldscount() > 0 )
                    $this->renderSubs ($sub, $selected_id, $this->out);
            }
        }

        return $this->out;
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
