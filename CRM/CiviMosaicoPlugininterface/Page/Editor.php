<?php

// override standard Mosaico Editor.php

class CRM_CiviMosaicoPlugininterface_Page_Editor extends CRM_Mosaico_Page_Editor
{

  const DEFAULT_MODULE_WEIGHT = 200;

    public function run()
    {
        $smarty = CRM_Core_Smarty::singleton();
        $config = $this->getMosaicoPlugins();
        $smarty->assign( 'baseUrl', CRM_Mosaico_Utils::getMosaicoDistUrl( 'relative' ) );
        $smarty->assign( 'scriptUrls', $config[ 'scripts' ] );
        $smarty->assign( 'styleUrls', $config[ 'styles' ] );
        $smarty->assign( 'mosaicoPlugins', '[ ' . implode( ',', $config[ 'plugin' ] ) . ' ]' );
        $smarty->assign( 'mosaicoConfig', json_encode(
          $config[ 'config' ],
          defined( 'JSON_PRETTY_PRINT' ) ? JSON_PRETTY_PRINT : 0
        ) );
        echo $smarty->fetch( self::getTemplateFileName() );
        CRM_Utils_System::civiExit();
    }

    protected function getMosaicoPlugins() {
      $plugins = [ 'mosaico' => [
          'plugin' => '',
          'scripts' => $this->getScriptUrls(),
          'styles' => $this->getStyleUrls(),
          'config' => $this->createMosaicoConfig()
        ]
      ];

      /*
       * Allow plugins with their ressources to be added by a hook.
       * Mosaico itself is named 'mosaico', so its defaults can be read/modified using this hook
       * Array format:
       * [ 'plugin-name' => [
       *     'plugin' => 'function( vm ) { window.viewModel = vm; }', // <- the mosaico js plugin
       *     'scripts' => [ 'some_absolute_path/some_script.js', 'some_other_absolute_path/some_other_script.js' ],
       *     'styles' => [ 'some_absolute_path/some_style.css', 'some_other_absolute_path/some_other_style.css' ],
       *     'config' => [ 'tinymceConfigFull' ][ 'toolbar1' ] = 'numlist'
       *   ]
       * ]
       */
      if ( class_exists( '\Civi\Core\Event\GenericHookEvent') )
      {
        \Civi::dispatcher()->dispatch(
            'hook_civicrm_mosaicoPlugins',
            \Civi\Core\Event\GenericHookEvent::create(
                array( 'plugins' => &$plugins )
            )
        );
      }
      // flatten plugin entries
      $config = [ 'plugin' => [], 'scripts' => [], 'styles' => [], 'config' => [] ];
      foreach ( $plugins as $plugin ) {
        if ( is_array( $plugin ) ) {
          $this->addRessourcesToConfigArray( $config, $plugin, 'plugin' );
          $this->addRessourcesToConfigArray( $config, $plugin, 'scripts' );
          $this->addRessourcesToConfigArray( $config, $plugin, 'styles' );
          $this->addConfigToConfigArray( $config, $plugin, 'config' );
        }
      }
      return $config;
    }

    private function addRessourcesToConfigArray( &$config, $new_config, $key ) {
      if ( array_key_exists( $key, $new_config ) ) {
        if ( is_array( $new_config[ $key ] ) ) {
          foreach ( $new_config[ $key ] as $new_value ) {
            if ( '' != $new_value ) {
              $config[ $key ][] = $new_value;
            }
          }
        } else {
          if ( '' != $new_config[ $key ] ) {
            $config[ $key ][] = $new_config[ $key ];
          }
        }
      }
    }

    private function addConfigToConfigArray( &$config, $new_config, $key ) {
      if ( array_key_exists( $key, $new_config ) ) {
        if ( is_array( $new_config[ $key ] ) ) {
          foreach ( $new_config[ $key ] as $config_key => $new_value ) {
            $config[ $key ][ $config_key ] = $new_value;
          }
        }
      }
    }
}

?>
