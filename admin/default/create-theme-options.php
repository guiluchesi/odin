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
                    )
                )//Fecha array de fields
            ) //Fecha array de padrões general
        ) //Fecha array principal
    ); //Fecha set-fields
