<?php

namespace ProfilePress\Core\Themes\DragDrop\Registration;

use ProfilePress\Core\Admin\SettingsPages\DragDropBuilder\DragDropBuilder;
use ProfilePress\Core\Themes\DragDrop\AbstractTheme;
use ProfilePress\Core\Admin\SettingsPages\DragDropBuilder\Fields;

class PerfectoLite extends AbstractTheme
{
    public static function default_field_listing()
    {
        Fields\Init::init();
        $standard_fields = DragDropBuilder::get_instance()->standard_fields();

        return [
            $standard_fields['reg-username'],
            $standard_fields['reg-email'],
            $standard_fields['reg-password'],
            $standard_fields['reg-first-name'],
            $standard_fields['reg-last-name'],
        ];
    }

    public function appearance_settings($settings)
    {
        $settings[] = [
            'id'       => 'perfectolite_registration_headline',
            'type'     => 'text',
            'label'    => esc_html__('Headline', 'wp-user-avatar'),
            'priority' => 20
        ];

        return $settings;
    }

    public function color_settings($settings)
    {
        $settings2 = [
            [
                'id'    => 'perfectolite_registration_bg_color',
                'type'  => 'color',
                'label' => esc_html__('Background', 'wp-user-avatar')
            ],
            [
                'id'    => 'perfectolite_registration_border',
                'type'  => 'color',
                'label' => esc_html__('Form Border', 'wp-user-avatar')
            ],
            [
                'id'    => 'perfectolite_registration_text_color',
                'type'  => 'color',
                'label' => esc_html__('Text', 'wp-user-avatar')
            ],
            [
                'id'    => 'perfectolite_registration_placeholder_color',
                'type'  => 'color',
                'label' => esc_html__('Field Placeholder', 'wp-user-avatar')
            ],
            [
                'id'    => 'perfectolite_registration_button_bg_color',
                'type'  => 'color',
                'label' => esc_html__('Button Background', 'wp-user-avatar')
            ],
            [
                'id'    => 'perfectolite_registration_button_text_color',
                'type'  => 'color',
                'label' => esc_html__('Button Text', 'wp-user-avatar')
            ]
        ];

        return array_merge($settings, $settings2);
    }

    public function default_metabox_settings()
    {
        $data                                                = parent::default_metabox_settings();
        $data['perfectolite_registration_headline']          = esc_html__('Crear una Cuenta', 'wp-user-avatar');
        $data['perfectolite_registration_bg_color']          = '#ffffff';
        $data['perfectolite_registration_border']            = '#f0f0f0';
        $data['perfectolite_registration_text_color']        = '#555555';
        $data['perfectolite_registration_placeholder_color'] = '#555555';
        $data['perfectolite_registration_button_bg_color']   = '#9ec23e';//'#196cd8';
        $data['perfectolite_registration_button_text_color'] = '#ffffff';

        return $data;
    }

    public function form_structure()
    {
        $fields              = $this->field_listing();
        $registration_button = $this->form_submit_button();
        $headline            = $this->get_meta('perfectolite_registration_headline');

        return <<<HTML
[pp-form-wrapper class="perfecto"]
    <div class="perfecto-heading">$headline</div>
    $fields
	$registration_button
[/pp-form-wrapper]
HTML;

    }

    public function form_css()
    {
        $form_id   = $this->form_id;
        $form_type = $this->form_type;

        $bg_color          = $this->get_meta('perfectolite_registration_bg_color');
        $border_color      = $this->get_meta('perfectolite_registration_border');
        $text_color        = $this->get_meta('perfectolite_registration_text_color');
        $placeholder_color = $this->get_meta('perfectolite_registration_placeholder_color');
        $button_bg_color   = $this->get_meta('perfectolite_registration_button_bg_color');
        $button_text_color = $this->get_meta('perfectolite_registration_button_text_color');

        return <<<CSS
/*  css class for the form generated errors */
#pp-$form_type-$form_id-wrap .profilepress-reg-status {
    border-radius: 5px;
    font-size: 16px;
    line-height: 1.471;
    padding: 10px;
    background-color: #e74c3c;
    color: #ffffff;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    margin: 10px auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    max-width: 450px;
}

#pp-$form_type-$form_id-wrap .profilepress-reg-status.success {
    background-color: #2ecc71;
    color: #fff;
}

#pp-$form_type-$form_id-wrap .profilepress-reg-status a {
    color: #fff;
    text-decoration: underline;
}

div#pp-$form_type-$form_id.perfecto * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: $text_color;
}

div#pp-$form_type-$form_id.perfecto ::placeholder{
  color: $placeholder_color;
}

div#pp-$form_type-$form_id.perfecto ::-webkit-input-placeholder{
  color: $placeholder_color;
}

div#pp-$form_type-$form_id.perfecto ::-moz-placeholder{
  color: $placeholder_color;
}

div#pp-$form_type-$form_id.perfecto :-moz-placeholder{
  color: $placeholder_color;
}

div#pp-$form_type-$form_id.perfecto :-ms-input-placeholder{
  color: $placeholder_color;
}

div#pp-$form_type-$form_id.perfecto {
    margin: 5px auto;
    border: 2px solid $border_color;
    background: $bg_color;
    max-width: 450px;
    padding: 30px;
    width: 100%;
    font-family: helvetica, arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    font-smoothing: antialiased;
    font-size: 14px;
    line-height: 24px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

div#pp-$form_type-$form_id.perfecto .perfecto-heading {
    font-size: 24px;
    line-height: 34px;
    margin-bottom: 20px;
    display: block;
    font-weight: 100;
    text-align: center;
}

div#pp-$form_type-$form_id.perfecto input:not([type="submit"]),
div#pp-$form_type-$form_id.perfecto select,
div#pp-$form_type-$form_id.perfecto textarea {
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.125);
    padding: 12px 18px;
    width: 100%;
    outline: none;
    font-size: 12px;
    line-height: 22px;
    font-family: helvetica, arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    font-smoothing: antialiased;
    border: 1px solid #ddd;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    transition: 0.4s;
    margin: 0;
}

div#pp-$form_type-$form_id.perfecto .pp-form-field-wrap {
    margin-bottom: 15px;
}

div#pp-$form_type-$form_id.perfecto input:not([type="submit"]):focus {
    border-color: #ccc;
    background: #fafafa;
    -webkit-box-shadow: inset 0px 1px 5px 0px #f0f0f0;
    -moz-box-shadow: inset 0px 1px 5px 0px #f0f0f0;
    box-shadow: inset 0px 1px 5px 0px #f0f0f0;
}

div#pp-$form_type-$form_id.perfecto input.ppform-submit-button {
    padding: 12px 26px;
    width: 100%;
    border: 0;
    outline: none;
    margin: 0;
    color: $button_text_color;
    cursor: pointer;
    background: '#9ec23e';/*$button_bg_color;cristian*/
    font-size: 11px;
    line-height: 21px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: bold;
    font-family: helvetica, arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    font-smoothing: antialiased;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    transition: 0.4s;
}
CSS;

    }
}