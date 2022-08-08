<?php
/**
 * Register custom Blocks
 */

if ( function_exists( 'lazyblocks' ) ) :

/**
 * Team Block V1
 */
lazyblocks()->add_block( array(
    'id' => 235,
    'title' => 'Team',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" /></svg>',
    'keywords' => array(
    ),
    'slug' => 'lazyblock/team',
    'description' => '',
    'category' => 'widgets',
    'category_label' => 'widgets',
    'supports' => array(
        'customClassName' => true,
        'anchor' => false,
        'align' => array(
            0 => 'wide',
            1 => 'full',
        ),
        'html' => false,
        'multiple' => true,
        'inserter' => true,
    ),
    'ghostkit' => array(
        'supports' => array(
            'spacings' => false,
            'display' => false,
            'scrollReveal' => false,
            'frame' => false,
            'customCSS' => false,
        ),
    ),
    'controls' => array(
        'control_cb58624fd2' => array(
            'type' => 'text',
            'name' => 'team-member-name',
            'default' => '',
            'label' => 'Name',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_4ee9484d9b' => array(
            'type' => 'text',
            'name' => 'team-member-specialty',
            'default' => '',
            'label' => 'Specialty/Position',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_c93a7d44d4' => array(
            'type' => 'image',
            'name' => 'team-member-image',
            'default' => '',
            'label' => 'Image',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'preview_size' => 'large',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_9bd9ee4daa' => array(
            'type' => 'text',
            'name' => 'team-facebook',
            'default' => '',
            'label' => 'Facebook',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '25',
            'hide_if_not_selected' => 'true',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_96385b4dc3' => array(
            'type' => 'text',
            'name' => 'team-twitter',
            'default' => '',
            'label' => 'Twitter',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '25',
            'hide_if_not_selected' => 'true',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_80d85f4bef' => array(
            'type' => 'text',
            'name' => 'team-linkedin',
            'default' => '',
            'label' => 'LinkedIn',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '25',
            'hide_if_not_selected' => 'true',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_df38bf441f' => array(
            'type' => 'color',
            'name' => 'team-icon-color',
            'default' => 'inherit',
            'label' => 'Icon Color',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'alpha' => 'true',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_cd1b4949eb' => array(
            'type' => 'toggle',
            'name' => 'show-team-icon-label',
            'default' => '',
            'label' => 'Show Icon Label',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'checked' => 'false',
            'alongside_text' => 'Show/Hide Label',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_4cbb6e4c6a' => array(
            'type' => 'select',
            'name' => 'social-icon-orientation',
            'default' => '',
            'label' => 'Social Icon Orientation',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'choices' => array(
                array(
                    'label' => 'Horizontal',
                    'value' => 'flex',
                ),
                array(
                    'label' => 'Vertical',
                    'value' => 'block',
                ),
            ),
            'allow_null' => 'true',
            'multiple' => 'false',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_7679b04534' => array(
            'type' => 'inner_blocks',
            'name' => 'team-additional-info',
            'default' => '',
            'label' => 'Details',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
    ),
    'code' => array(
        'output_method' => 'template',
        'editor_html' => '',
        'editor_callback' => '',
        'editor_css' => '',
        'frontend_html' => '',
        'frontend_callback' => '',
        'frontend_css' => '',
        'show_preview' => 'always',
        'single_output' => false,
    ),
    'condition' => array(
    ),
) );
/**
 * Create Accordion Block
 */

lazyblocks()->add_block( array(
    'id' => 211,
    'title' => 'Accordion',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14 10H2v2h12v-2zm0-4H2v2h12V6zm4 8v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zM2 16h8v-2H2v2z" /></svg>',
    'keywords' => array(
    ),
    'slug' => 'lazyblock/accordion',
    'description' => '',
    'category' => 'text',
    'category_label' => 'text',
    'supports' => array(
        'customClassName' => true,
        'anchor' => false,
        'align' => array(
            0 => 'wide',
            1 => 'full',
        ),
        'html' => false,
        'multiple' => true,
        'inserter' => true,
    ),
    'ghostkit' => array(
        'supports' => array(
            'spacings' => false,
            'display' => false,
            'scrollReveal' => false,
            'frame' => false,
            'customCSS' => false,
        ),
    ),
    'controls' => array(
        'control_a8da844fde' => array(
            'type' => 'repeater',
            'name' => 'accordion-item',
            'default' => '',
            'label' => 'Item',
            'help' => '',
            'child_of' => '',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'true',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'rows_min' => '1',
            'rows_max' => '',
            'rows_label' => 'Item {{#}}',
            'rows_add_button_label' => '+ New Item',
            'rows_collapsible' => 'true',
            'rows_collapsed' => 'true',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_27c8a24d94' => array(
            'type' => 'text',
            'name' => 'accordion-title',
            'default' => '',
            'label' => 'Title',
            'help' => '',
            'child_of' => 'control_a8da844fde',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_4d9b424b41' => array(
            'type' => 'textarea',
            'name' => 'accordion-content',
            'default' => '',
            'label' => 'Content',
            'help' => '',
            'child_of' => 'control_a8da844fde',
            'placement' => 'content',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_030be7435b' => array(
            'type' => 'select',
            'name' => 'accordion-style',
            'default' => 'default',
            'label' => 'Accordion Style',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'choices' => array(
                array(
                    'label' => 'Default',
                    'value' => 'default',
                ),
                array(
                    'label' => 'Modern',
                    'value' => 'modern',
                ),
            ),
            'allow_null' => 'false',
            'multiple' => 'false',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_a1d8ad4b7d' => array(
            'type' => 'range',
            'name' => 'accordion-size',
            'default' => '0.8',
            'label' => 'Size',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'min' => '0.1',
            'max' => '3',
            'step' => '0.1',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_46b8b14985' => array(
            'type' => 'text',
            'name' => 'accordion-title-font-size',
            'default' => '1.25rem',
            'label' => 'Title Font Size',
            'help' => 'Accepts px, em and rem.',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '1.25rem',
            'characters_limit' => '8',
        ),
        'control_92fa394603' => array(
            'type' => 'text',
            'name' => 'accordion-content-font-size',
            'default' => '1rem',
            'label' => 'Content Font Size',
            'help' => 'Accepts px, em and rem.',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'placeholder' => '1rem',
            'characters_limit' => '8',
        ),
        'control_e78a634a2f' => array(
            'type' => 'color',
            'name' => 'accordion-title-text-color',
            'default' => '#222222',
            'label' => 'Title Color',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'alpha' => 'true',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_b5c9bf49b5' => array(
            'type' => 'color',
            'name' => 'accordion-content-text-color',
            'default' => '',
            'label' => 'Content Color',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'alpha' => 'false',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_3ae9e449a7' => array(
            'type' => 'color',
            'name' => 'accordion-background',
            'default' => '#f5f4f4',
            'label' => 'Background',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'alpha' => 'true',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_a82947483c' => array(
            'type' => 'color',
            'name' => 'accordion-background-active',
            'default' => '#cecece',
            'label' => 'Active Background',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'alpha' => 'true',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
        'control_04399f43c2' => array(
            'type' => 'color',
            'name' => 'accordion-content-background-color',
            'default' => '',
            'label' => 'Content Background',
            'help' => '',
            'child_of' => '',
            'placement' => 'inspector',
            'width' => '100',
            'hide_if_not_selected' => 'false',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
            'required' => 'false',
            'alpha' => 'false',
            'output_format' => '',
            'placeholder' => '',
            'characters_limit' => '',
        ),
    ),
    'code' => array(
        'output_method' => 'template',
        'editor_html' => '',
        'editor_callback' => '',
        'editor_css' => '',
        'frontend_html' => '<?php foreach( $attributes[\'accordion-item\'] as $inner ): ?>
        <h4><?php echo $inner[\'accordion-title\']; ?></h4>
        <p><?php echo $inner[\'accordion-content\']; ?></p>
<?php endforeach; ?>',
        'frontend_callback' => '',
        'frontend_css' => '',
        'show_preview' => 'always',
        'single_output' => true,
    ),
    'condition' => array(
    ),
) );
    
endif;

if ( function_exists( 'lazyblocks' ) ) :

    
    
endif;