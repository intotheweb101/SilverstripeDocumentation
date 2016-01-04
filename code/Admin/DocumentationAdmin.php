<?php

class DocumentationAdmin extends ModelAdmin {
    private static $managed_models = array(
        'Documentation'
    );

    private static $url_segment = 'documentation';

    private static $menu_title = 'Documentation';

}
