<?php

/**
 * CategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CategoryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CategoryTable
     */
    public static function getInstance()
    {
        return self::getQuery()
                ->execute();
    }
    
    public static function getQuery()
    {
        return Doctrine_Core::getTable('Category')->createQuery('c')
                ->select('c.*, t.*')
                ->leftJoin('c.Translation t')
//                ->AndWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                ->addSelect('(SELECT count(*) FROM category WHERE parent_id = c.id) AS chieldscount')
                ->orderBy('c.position');
    }

    public static function getById($id)
    {
        return self::getQuery()
                ->andWhere('c.id = ?', $id)
                ->fetchOne();
    }

    public static function getByUrl($url)
    {
        return self::getQuery()
                ->andWhere('c.url = ?', $url)
                ->fetchOne();
    }
    
    public static function getByUrlForShow($url)
    {
        return self::getQuery()
                ->AndWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                ->andWhere('t.lan_enable = ?', true)
                ->andWhere('c.url = ?', $url)
                ->fetchOne();
    }
    
    public static function getRoots()
    {
        return self::getQuery()
                ->andWhere('parent_id = ?', 0)
                ->AndWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                ->andWhere('t.lan_enable = ?', true)
                ->execute();
    }
    
    public static function getLastByLevel()
    {
        return self::getQuery()
                ->orderBy('level ASC')
                ->AndWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                ->andWhere('t.lan_enable = ?', true)
                ->limit(sfConfig::get( 'app_categories_on_main' ))
                ->orderBy('t.name')
                ->execute();
    }
    
    public static function getLastForMain()
    {
        return self::getQuery()
                ->andWhere('c.on_main = ?', true)
                ->orderBy('level ASC')
                ->AndWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                ->andWhere('t.lan_enable = ?', true)
                ->limit(sfConfig::get( 'app_categories_on_main' ))
                ->orderBy('c.updated_at DESC')
                ->execute();
    }
    
    public static function getSubs($id, $cu)
    {
        return self::getQuery()
                ->andWhere('parent_id = ?', $id)
                ->andWhere('t.lang = ?', substr(sfContext::getInstance()->getUser()->getCulture(), 0, 2))
                ->andWhere('t.lan_enable = ?', true)
                ->orderBy('t.name')
                ->execute();
    }
    
    
    
}