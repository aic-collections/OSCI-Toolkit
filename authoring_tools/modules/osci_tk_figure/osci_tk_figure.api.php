<?php

/**
 * Implements osci_tk_figure_asset_NODE_TYPE_options_form()
 *
 * Options for figure assets must be defined in a custom form
 * per node type.
 *
 * You do not need to provide a submit function when creating 
 * your form function.  All values will be stored in a 
 * key/value pair.  However any special handling like files
 * will need to provide a custom submit function to handle 
 * these cases
 */
function osci_tk_figure_asset_NODE_TYPE_options_form($form, $form_state) {
    $form['options'] = array(
        '#type'     => 'options',
        '#title'    => t('Some Options'),
        '#value'    => array(1,2,3,4),
    );

    return osci_tk_figure_asset_options_form($form, $form_state);
}