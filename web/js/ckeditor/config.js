/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	
	// %REMOVE_START%
	// The configuration options below are needed when running CKEditor from source files.
	config.plugins = 'dialogui,dialog,dialogadvtab,basicstyles,bidi,blockquote,clipboard,button,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,div,resize,toolbar,elementspath,list,indent,enterkey,entities,popup,filebrowser,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,forms,format,htmlwriter,horizontalrule,iframe,wysiwygarea,image,smiley,justify,link,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastefromword,preview,print,removeformat,save,selectall,showblocks,showborders,sourcearea,specialchar,menubutton,scayt,stylescombo,tab,table,tabletools,undo,wsc,htmlbuttons,maxheight,mediaembed,oembed';//,uicolor
	config.skin = 'moono';
    config.defaultLanguage = 'ru';
    config.contentsLanguage = getLanguage();
    config.language = getLanguage();
    config.width = '100%';
    config.contentsCss = '../../css/main.css';
    config.toolbarCanCollapse = true;
    config.enterMode = CKEDITOR.ENTER_BR;
    config.fontSize_defaultLabel = '12px';
    config.filebrowserBrowseUrl= '';
    config.filebrowserUploadUrl= '';
	// %REMOVE_END%
};
