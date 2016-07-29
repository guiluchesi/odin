<?php

	// Inicio de Configurações do Tema
    $settings = new Odin_Theme_Options(
        'configuracoes-costa-brava', // Slug/ID of the Settings Page (Required)
        'Opções do Tema', // Settings page name (Required)
        'manage_options' // Page capability (Optional) [default is manage_options]
    );

    $settings->set_tabs(
          array(
              array(
                  'id' => 'main_configuration', // Slug/ID of the Settings tab (Required)
                  'title' => __( 'Configurações', 'odin' ), // Settings tab title (Required)
              ),
              array(
                  'id' => 'main_midias', // Slug/ID of the Settings tab (Required)
                  'title' => __( 'Mídias Sociais', 'odin' ), // Settings tab title (Required)
              )
          )
      );

      $settings->set_fields(
          array(
              'odin_general_padroes' => array( // Slug/ID of the section (Required)
                  'tab'   => 'main_configuration', // Tab ID/Slug (Required)
                  'title' => __( 'Principais Informações', 'odin' ), // Section title (Required)
                  'fields' => array( // Section fields (Required)

                		array(
                          'id'         => 'logo', // Required
                          'label'      => __( 'Logo', 'odin' ), // Required
                          'type'       => 'image', // Required
                      ),

                      array(
                          'id'         => 'logo_radius_travel', // Required
                          'label'      => __( 'Radius Travel', 'odin' ), // Required
                          'type'       => 'image', // Required
                      ),

                      array(
                          'id'         => 'logo_rodape', // Required
                          'label'      => __( 'Logo do Rodapé', 'odin' ), // Required
                          'type'       => 'image', // Required
                      ),

                      array(
  					    'id'          => 'telefone_padrao', // Obrigatório
  					    'label'       => __( 'Telefone', 'odin' ), // Obrigatório
  					    'type'        => 'input', // Obrigatório
  					    'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
  					        'type'	=> 'tel'
  					    ),
  					    'default'     => '0300 10000 40', // Opcional
  					),

  					array(
  					    'id'          => 'email_padrao', // Obrigatório
  					    'label'       => __( 'E-mail', 'odin' ), // Obrigatório
  					    'type'        => 'input', // Obrigatório
  					    'default'     => 'contato@costabrava.com.br', // Opcional
  					    'attributes'  => array( // Optional (html input elements)
                              'type' => 'email'
                          )
  					),

                      // array(
                      //     'id'        => 'link_reserva', // Required
                      //     'label'     => __( 'Link de Reserve', 'odin' ), // Required
                      //     'type'		=> 'input', // Required
                      //     'default'  	=> '#', // Optional
                      //     'attributes'  => array( // Optional (html input elements)
                      //         'type' => 'url'
                      //     )
                      // ),

                      array(
                          'id'    => 'widget_info', // Obrigatório
                          'label' => __( 'Widget', 'odin' ), // Obrigatório
                          'type'  => 'HTML', // Obrigatório
                          'description' => __( '', 'odin' ) // Opcional
                      ),

  					array(
  					    'id'          => 'shortcode_news_widget', // Obrigatório
  					    'label'       => __( 'Shortcode da Newsletter', 'odin' ), // Obrigatório
  					    'type'        => 'text', // Obrigatório
  					    'default'     => '[contact-form-7 id="85" title="Newsletter Widget"]', // Opcional
  					),

  					array(
  					    'id'          => 'ligue_widget', // Obrigatório
  					    'label'       => __( 'Ligue para', 'odin' ), // Obrigatório
  					    'type'        => 'text', // Obrigatório
  					    'default'     => '0300 10000 40', // Opcional
  					),

  					array(
  					    'id'          => 'solicite_widget', // Obrigatório
  					    'label'       => __( 'Solicite Aqui', 'odin' ), // Obrigatório
  					    'type'        => 'text', // Obrigatório
  					    'default'     => 'http://192.168.1.106/princiweb/costabrava.com.br/', // Opcional
  					),

                      array(
                          'id'    => 'footer_info', // Obrigatório
                          'label' => __( 'Rodapé', 'odin' ), // Obrigatório
                          'type'  => 'HTML', // Obrigatório
                          'description' => __( '', 'odin' ) // Opcional
                      ),

  					array(
  					    'id'          => 'shortcode_news', // Obrigatório
  					    'label'       => __( 'Shortcode da Newsletter', 'odin' ), // Obrigatório
  					    'type'        => 'text', // Obrigatório
  					    'default'     => '[contact-form-7 id="75" title="Newsletter"]', // Opcional
  					),

                      array(
                          'id'          => 'loop_telefones', // Obrigatório
                          'label'       => __( 'Telefones', 'odin' ), // Obrigatório
                          'type'        => 'textarea', // Obrigatório
                          'default'     => '<ul class="half"><li>Campinas<span>(19) 3753-2300</span></li><li>Campinas Fax<span>(19) 3753-2323</span></li><li>São Paulo<span>(11) 3014-0555</span></li><li>Sorocaba<span>(15) 3141-5030</span></li><li>Rio de Janeiro<span>(21) 3512-0910</span></li></ul><ul class="half"><li>Curitiba<span>(41) 3012-0333</span></li><li>Brasília<span>(61) 3246-3055</span></li><li>Porto Alegre<span>(51) 3103-0065</span></li><li>Belo Horizonte<span>(31) 3515-0111</span></li><li>Atendimento<span>0300 10000 40</span></li></ul>', // Opcional
                          'options'     => array(
                              'textarea_rows' => 10
                          ),
                      ),

                      array(
                          'id'          => 'endereco', // Obrigatório
                          'label'       => __( 'Endereço', 'odin' ), // Obrigatório
                          'type'        => 'text', // Obrigatório
                          'default'     => 'Av. Dr. Jesuíno Marcondes Machado, 581 - Nova Campinas - Campinas - SP, CEP: 13092-108', // Opcional
                      ),

                  )
              ),

              'odin_home_slider' => array( // Slug/ID of the section (Required)
                  'tab'   => 'sliders', // Tab ID/Slug (Required)
                  'title' => __( 'Adidione as Mídias Sociais', 'odin' ), // Section title (Required)
                  'fields' => array( // Section fields (Required)
                  	array(
                          'id'        => 'slider', // Required
                          'label'     => __( 'Link da Facebook', 'odin' ), // Required
                          'type' => 'image_plupload'
                      )

                  )
              )

          )
      );
