# GravityForms 3rd Party Submission Handler #
**Contributors:** thewebist  
**Tags:** gravityforms, forms  
**Requires at least:** 4.4  
**Tested up to:** 4.9.6  
**Stable tag:** 0.1.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

Handles submissions of a GravityForms form to a third party.

## Description ##

With minimal configuration, this plugin will submit your GravityForms form entries to a third party.

To get this plugin hooked to your GravityForms form, be sure to set these constants in your wp-config.php

* `GF_3RD_PARTY_FORM` - set this to the Form ID for the form you want to submit to a third party
* `GF_3RD_PARTY_FORM_ENDPOINT` - this is the Endpoint URL for your third party

## Installation ##

Install this plugin as you would any other WordPress plugin.

## Frequently Asked Questions ##

### How does this work? ###

This plugin hooks to the `gform_after_submission` hook and sends the form's data along to a third party endpoint via an HTTP $_POST.



## Changelog ##

### 0.1.0 ###
* Initial release.