<?php
// auto-generated by sfRoutingConfigHandler
// date: 2013/03/10 21:20:16
$this->routes['new_article'] = unserialize('C:7:"sfRoute":1111:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:11:"new_article";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:12:"/new_article";i:4;s:12:"/new_article";i:5;s:17:"#^/new_article$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:7:"article";s:6:"action";s:3:"add";}i:8;a:0:{}i:9;s:0:"";i:10;b:0;}}');
$this->routes['new_category'] = unserialize('C:7:"sfRoute":1116:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:12:"new_category";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:13:"/new_category";i:4;s:13:"/new_category";i:5;s:18:"#^/new_category$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:8:"category";s:6:"action";s:3:"add";}i:8;a:0:{}i:9;s:0:"";i:10;b:0;}}');
$this->routes['edit_article'] = unserialize('C:7:"sfRoute":1312:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:12:"edit_article";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:4:":url";i:3;s:3:"url";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:18:"/edit_article/:url";i:4;s:13:"/edit_article";i:5;s:35:"#^/edit_article/(?P<url>[^/\\.]+)$#x";i:6;a:1:{s:3:"url";s:4:":url";}i:7;a:2:{s:6:"module";s:7:"article";s:6:"action";s:4:"edit";}i:8;a:1:{s:3:"url";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['edit_category'] = unserialize('C:7:"sfRoute":1317:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:13:"edit_category";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:4:":url";i:3;s:3:"url";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:19:"/edit_category/:url";i:4;s:14:"/edit_category";i:5;s:36:"#^/edit_category/(?P<url>[^/\\.]+)$#x";i:6;a:1:{s:3:"url";s:4:":url";}i:7;a:2:{s:6:"module";s:8:"category";s:6:"action";s:4:"edit";}i:8;a:1:{s:3:"url";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['about'] = unserialize('C:7:"sfRoute":1340:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:5:"about";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:18:"/:sf_culture/about";i:4;s:0:"";i:5;s:40:"#^/(?P<sf_culture>(?:ru|uk|en))/about$#x";i:6;a:1:{s:10:"sf_culture";s:11:":sf_culture";}i:7;a:2:{s:6:"module";s:5:"about";s:6:"action";s:5:"index";}i:8;a:1:{s:10:"sf_culture";s:12:"(?:ru|uk|en)";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['edit_about'] = unserialize('C:7:"sfRoute":1106:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:10:"edit_about";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:11:"/edit_about";i:4;s:11:"/edit_about";i:5;s:16:"#^/edit_about$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:5:"about";s:6:"action";s:4:"edit";}i:8;a:0:{}i:9;s:0:"";i:10;b:0;}}');
$this->routes['article'] = unserialize('C:7:"sfRoute":1639:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:9:":category";i:3;s:8:"category";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:4:":url";i:3;s:3:"url";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:27:"/:sf_culture/:category/:url";i:4;s:0:"";i:5;s:73:"#^/(?P<sf_culture>(?:ru|uk|en))/(?P<category>[^/\\.]+)/(?P<url>[^/\\.]+)$#x";i:6;a:3:{s:10:"sf_culture";s:11:":sf_culture";s:8:"category";s:9:":category";s:3:"url";s:4:":url";}i:7;a:2:{s:6:"module";s:7:"article";s:6:"action";s:5:"index";}i:8;a:3:{s:10:"sf_culture";s:12:"(?:ru|uk|en)";s:8:"category";s:7:"[^/\\.]+";s:3:"url";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['login'] = unserialize('C:7:"sfRoute":1348:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:5:"login";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:18:"/:sf_culture/login";i:4;s:0:"";i:5;s:40:"#^/(?P<sf_culture>(?:ru|uk|en))/login$#x";i:6;a:1:{s:10:"sf_culture";s:11:":sf_culture";}i:7;a:2:{s:6:"module";s:11:"sfGuardAuth";s:6:"action";s:6:"signin";}i:8;a:1:{s:10:"sf_culture";s:12:"(?:ru|uk|en)";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['logout'] = unserialize('C:7:"sfRoute":1097:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:6:"logout";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:7:"/logout";i:4;s:7:"/logout";i:5;s:12:"#^/logout$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:11:"sfGuardAuth";s:6:"action";s:7:"signout";}i:8;a:0:{}i:9;s:0:"";i:10;b:0;}}');
$this->routes['category'] = unserialize('C:7:"sfRoute":1444:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:9:":category";i:3;s:8:"category";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:22:"/:sf_culture/:category";i:4;s:0:"";i:5;s:56:"#^/(?P<sf_culture>(?:ru|uk|en))/(?P<category>[^/\\.]+)$#x";i:6;a:2:{s:10:"sf_culture";s:11:":sf_culture";s:8:"category";s:9:":category";}i:7;a:2:{s:6:"module";s:8:"category";s:6:"action";s:5:"index";}i:8;a:2:{s:10:"sf_culture";s:12:"(?:ru|uk|en)";s:8:"category";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['change_language'] = unserialize('C:7:"sfRoute":1371:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:15:"change_language";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:9:":language";i:3;s:8:"language";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:26:"/change_language/:language";i:4;s:16:"/change_language";i:5;s:43:"#^/change_language/(?P<language>[^/\\.]+)$#x";i:6;a:1:{s:8:"language";s:9:":language";}i:7;a:2:{s:6:"module";s:8:"language";s:6:"action";s:14:"changeLanguage";}i:8;a:1:{s:8:"language";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1062:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:4:"home";s:6:"action";s:5:"index";}i:8;a:0:{}i:9;s:1:"/";i:10;b:0;}}');
$this->routes['localized_homepage'] = unserialize('C:7:"sfRoute":1325:{a:11:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:11:":sf_culture";i:3;s:10:"sf_culture";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:13:"/:sf_culture/";i:4;s:0:"";i:5;s:35:"#^/(?P<sf_culture>(?:ru|uk|en))/$#x";i:6;a:1:{s:10:"sf_culture";s:11:":sf_culture";}i:7;a:2:{s:6:"module";s:4:"home";s:6:"action";s:5:"index";}i:8;a:1:{s:10:"sf_culture";s:12:"(?:ru|uk|en)";}i:9;s:1:"/";i:10;b:0;}}');
