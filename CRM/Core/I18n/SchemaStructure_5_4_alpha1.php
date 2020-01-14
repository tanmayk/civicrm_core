<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 5                                                  |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2019                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from schema_structure.tpl
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
class CRM_Core_I18n_SchemaStructure_5_4_alpha1 {

  /**
   * Get translatable columns.
   *
   * @return array
   *   A table-indexed array of translatable columns.
   */
  public static function columns() {
    static $result = NULL;
    if (!$result) {
      $result = [
        'civicrm_location_type' => [
          'display_name' => "varchar(64)",
        ],
        'civicrm_option_group' => [
          'title' => "varchar(255)",
          'description' => "varchar(255)",
        ],
        'civicrm_relationship_type' => [
          'label_a_b' => "varchar(64)",
          'label_b_a' => "varchar(64)",
          'description' => "varchar(255)",
        ],
        'civicrm_contact_type' => [
          'label' => "varchar(64)",
          'description' => "text",
        ],
        'civicrm_batch' => [
          'title' => "varchar(255)",
          'description' => "text",
        ],
        'civicrm_premiums' => [
          'premiums_intro_title' => "varchar(255)",
          'premiums_intro_text' => "text",
          'premiums_nothankyou_label' => "varchar(255)",
        ],
        'civicrm_membership_status' => [
          'label' => "varchar(128)",
        ],
        'civicrm_survey' => [
          'title' => "varchar(255)",
          'instructions' => "text",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
        ],
        'civicrm_participant_status_type' => [
          'label' => "varchar(255)",
        ],
        'civicrm_case_type' => [
          'title' => "varchar(64)",
          'description' => "varchar(255)",
        ],
        'civicrm_tell_friend' => [
          'title' => "varchar(255)",
          'intro' => "text",
          'suggested_message' => "text",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
        ],
        'civicrm_custom_group' => [
          'title' => "varchar(64)",
          'help_pre' => "text",
          'help_post' => "text",
        ],
        'civicrm_custom_field' => [
          'label' => "varchar(255)",
          'help_pre' => "text",
          'help_post' => "text",
        ],
        'civicrm_option_value' => [
          'label' => "varchar(512)",
          'description' => "text",
        ],
        'civicrm_group' => [
          'title' => "varchar(64)",
        ],
        'civicrm_contribution_page' => [
          'title' => "varchar(255)",
          'intro_text' => "text",
          'pay_later_text' => "text",
          'pay_later_receipt' => "text",
          'initial_amount_label' => "varchar(255)",
          'initial_amount_help_text' => "text",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
          'thankyou_footer' => "text",
          'receipt_from_name' => "varchar(255)",
          'receipt_text' => "text",
          'footer_text' => "text",
        ],
        'civicrm_product' => [
          'name' => "varchar(255)",
          'description' => "text",
          'options' => "text",
        ],
        'civicrm_membership_type' => [
          'name' => "varchar(128)",
          'description' => "varchar(255)",
        ],
        'civicrm_membership_block' => [
          'new_title' => "varchar(255)",
          'new_text' => "text",
          'renewal_title' => "varchar(255)",
          'renewal_text' => "text",
        ],
        'civicrm_price_set' => [
          'title' => "varchar(255)",
          'help_pre' => "text",
          'help_post' => "text",
        ],
        'civicrm_dashboard' => [
          'label' => "varchar(255)",
        ],
        'civicrm_uf_group' => [
          'title' => "varchar(64)",
          'frontend_title' => "varchar(64)",
          'help_pre' => "text",
          'help_post' => "text",
          'cancel_button_text' => "varchar(64)",
          'submit_button_text' => "varchar(64)",
        ],
        'civicrm_uf_field' => [
          'help_post' => "text",
          'help_pre' => "text",
          'label' => "varchar(255)",
        ],
        'civicrm_price_field' => [
          'label' => "varchar(255)",
          'help_pre' => "text",
          'help_post' => "text",
        ],
        'civicrm_price_field_value' => [
          'label' => "varchar(255)",
          'description' => "text",
          'help_pre' => "text",
          'help_post' => "text",
        ],
        'civicrm_pcp_block' => [
          'link_text' => "varchar(255)",
        ],
        'civicrm_event' => [
          'title' => "varchar(255)",
          'summary' => "text",
          'description' => "text",
          'registration_link_text' => "varchar(255)",
          'event_full_text' => "text",
          'fee_label' => "varchar(255)",
          'intro_text' => "text",
          'footer_text' => "text",
          'confirm_title' => "varchar(255)",
          'confirm_text' => "text",
          'confirm_footer_text' => "text",
          'confirm_email_text' => "text",
          'confirm_from_name' => "varchar(255)",
          'thankyou_title' => "varchar(255)",
          'thankyou_text' => "text",
          'thankyou_footer_text' => "text",
          'pay_later_text' => "text",
          'pay_later_receipt' => "text",
          'initial_amount_label' => "varchar(255)",
          'initial_amount_help_text' => "text",
          'waitlist_text' => "text",
          'approval_req_text' => "text",
          'template_title' => "varchar(255)",
        ],
      ];
    }
    return $result;
  }

  /**
   * Get a table indexed array of the indices for translatable fields.
   *
   * @return array
   *   Indices for translatable fields.
   */
  public static function indices() {
    static $result = NULL;
    if (!$result) {
      $result = [
        'civicrm_custom_group' => [
          'UI_title_extends' => [
            'name' => 'UI_title_extends',
            'field' => [
              'title',
              'extends',
            ],
            'unique' => 1,
          ],
        ],
        'civicrm_custom_field' => [
          'UI_label_custom_group_id' => [
            'name' => 'UI_label_custom_group_id',
            'field' => [
              'label',
              'custom_group_id',
            ],
            'unique' => 1,
          ],
        ],
        'civicrm_group' => [
          'UI_title' => [
            'name' => 'UI_title',
            'field' => [
              'title',
            ],
            'unique' => 1,
          ],
        ],
      ];
    }
    return $result;
  }

  /**
   * Get tables with translatable fields.
   *
   * @return array
   *   Array of names of tables with fields that can be translated.
   */
  public static function tables() {
    static $result = NULL;
    if (!$result) {
      $result = array_keys(self::columns());
    }
    return $result;
  }

  /**
   * Get a list of widgets for editing translatable fields.
   *
   * @return array
   *   Array of the widgets for editing translatable fields.
   */
  public static function widgets() {
    static $result = NULL;
    if (!$result) {
      $result = [
        'civicrm_location_type' => [
          'display_name' => [
            'type' => "Text",
          ],
        ],
        'civicrm_option_group' => [
          'title' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "Text",
          ],
        ],
        'civicrm_relationship_type' => [
          'label_a_b' => [
            'type' => "Text",
          ],
          'label_b_a' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "Text",
          ],
        ],
        'civicrm_contact_type' => [
          'label' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
        ],
        'civicrm_batch' => [
          'title' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_premiums' => [
          'premiums_intro_title' => [
            'type' => "Text",
          ],
          'premiums_intro_text' => [
            'type' => "Text",
          ],
          'premiums_nothankyou_label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_membership_status' => [
          'label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_survey' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'instructions' => [
            'type' => "TextArea",
            'rows' => "20",
            'cols' => "80",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "TextArea",
            'rows' => "8",
            'cols' => "60",
          ],
        ],
        'civicrm_participant_status_type' => [
          'label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_case_type' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'description' => [
            'type' => "Text",
          ],
        ],
        'civicrm_tell_friend' => [
          'title' => [
            'type' => "Text",
          ],
          'intro' => [
            'type' => "Text",
          ],
          'suggested_message' => [
            'type' => "Text",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_custom_group' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_custom_field' => [
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "Text",
          ],
          'help_post' => [
            'type' => "Text",
          ],
        ],
        'civicrm_option_value' => [
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "8",
            'cols' => "60",
          ],
        ],
        'civicrm_group' => [
          'title' => [
            'type' => "Text",
          ],
        ],
        'civicrm_contribution_page' => [
          'title' => [
            'type' => "Text",
          ],
          'intro_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
          'pay_later_text' => [
            'type' => "Text",
          ],
          'pay_later_receipt' => [
            'type' => "Text",
          ],
          'initial_amount_label' => [
            'type' => "Text",
          ],
          'initial_amount_help_text' => [
            'type' => "Text",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "RichTextEditor",
            'rows' => "8",
            'cols' => "60",
          ],
          'thankyou_footer' => [
            'type' => "RichTextEditor",
            'rows' => "8",
            'cols' => "60",
          ],
          'receipt_from_name' => [
            'type' => "Text",
          ],
          'receipt_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'footer_text' => [
            'type' => "RichTextEditor",
            'rows' => "6",
            'cols' => "50",
          ],
        ],
        'civicrm_product' => [
          'name' => [
            'type' => "Text",
            'required' => "true",
          ],
          'description' => [
            'type' => "Text",
          ],
          'options' => [
            'type' => "Text",
          ],
        ],
        'civicrm_membership_type' => [
          'name' => [
            'type' => "Text",
            'label' => "Name",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
            'label' => "Description",
          ],
        ],
        'civicrm_membership_block' => [
          'new_title' => [
            'type' => "Text",
          ],
          'new_text' => [
            'type' => "Text",
          ],
          'renewal_title' => [
            'type' => "Text",
          ],
          'renewal_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_price_set' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_dashboard' => [
          'label' => [
            'type' => "Text",
          ],
        ],
        'civicrm_uf_group' => [
          'title' => [
            'type' => "Text",
            'required' => "true",
          ],
          'frontend_title' => [
            'type' => "Text",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'cancel_button_text' => [
            'type' => "Text",
          ],
          'submit_button_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_uf_field' => [
          'help_post' => [
            'type' => "Text",
          ],
          'help_pre' => [
            'type' => "Text",
          ],
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
        ],
        'civicrm_price_field' => [
          'label' => [
            'type' => "Text",
            'required' => "true",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "80",
          ],
        ],
        'civicrm_price_field_value' => [
          'label' => [
            'type' => "Text",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
          'help_pre' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
          'help_post' => [
            'type' => "TextArea",
            'rows' => "2",
            'cols' => "60",
          ],
        ],
        'civicrm_pcp_block' => [
          'link_text' => [
            'type' => "Text",
          ],
        ],
        'civicrm_event' => [
          'title' => [
            'type' => "Text",
          ],
          'summary' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'description' => [
            'type' => "TextArea",
            'rows' => "8",
            'cols' => "60",
          ],
          'registration_link_text' => [
            'type' => "Text",
          ],
          'event_full_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'fee_label' => [
            'type' => "Text",
          ],
          'intro_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'footer_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'confirm_title' => [
            'type' => "Text",
          ],
          'confirm_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'confirm_footer_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'confirm_email_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "50",
          ],
          'confirm_from_name' => [
            'type' => "Text",
          ],
          'thankyou_title' => [
            'type' => "Text",
          ],
          'thankyou_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'thankyou_footer_text' => [
            'type' => "TextArea",
            'rows' => "6",
            'cols' => "50",
          ],
          'pay_later_text' => [
            'type' => "Text",
          ],
          'pay_later_receipt' => [
            'type' => "Text",
          ],
          'initial_amount_label' => [
            'type' => "Text",
          ],
          'initial_amount_help_text' => [
            'type' => "Text",
          ],
          'waitlist_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'approval_req_text' => [
            'type' => "TextArea",
            'rows' => "4",
            'cols' => "60",
          ],
          'template_title' => [
            'type' => "Text",
          ],
        ],
      ];
    }
    return $result;
  }

}
