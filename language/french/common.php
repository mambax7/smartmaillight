<?php

/**
* $Id$
* Module: SmartMailLight
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/**  Text edited by RJB on 3/10/07 */
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

// message

define("_CO_SMLIGHT_MESSAGE_LISTID", "List");
define("_CO_SMLIGHT_MESSAGE_LISTID_DSC", "");
define("_CO_SMLIGHT_MESSAGE_SUBJECT", "Subject");
define("_CO_SMLIGHT_MESSAGE_SUBJECT_DSC", "");
define("_CO_SMLIGHT_MESSAGE_BODY", "Content");
define("_CO_SMLIGHT_MESSAGE_BODY_DSC", "");
define("_CO_SMLIGHT_MESSAGE_DATE", "Date to send");
define("_CO_SMLIGHT_MESSAGE_DATE_DSC", "This is the date the message will be sent.");
define("_CO_SMLIGHT_MESSAGE_STATUS", "Status");
define("_CO_SMLIGHT_MESSAGE_STATUS_DSC", "");
define("_CO_SMLIGHT_MESSAGE_ARCHIVED", "Archived this message");
define("_CO_SMLIGHT_MESSAGE_ARCHIVED_DSC", "If set to Yes, this message will be available in the archive section of the module.");

define("_CO_SMLIGHT_MESSAGE_STATUS_NEW", "New");
define("_CO_SMLIGHT_MESSAGE_STATUS_SENT", "Sent");
define("_CO_SMLIGHT_MESSAGE_STATUS_READY", "Compiled and ready to send");

// ecard

define("_CO_SMLIGHT_ECARD_TEMPLATEID", "Template");
define("_CO_SMLIGHT_ECARD_TEMPLATEID_DSC", "");
define("_CO_SMLIGHT_ECARD_SUBJECT", "Subject");
define("_CO_SMLIGHT_ECARD_SUBJECT_DSC", "");
define("_CO_SMLIGHT_ECARD_MESSAGE", "Message");
define("_CO_SMLIGHT_ECARD_MESSAGE_DSC", "");
define("_CO_SMLIGHT_ECARD_FROM_NAME", "From name");
define("_CO_SMLIGHT_ECARD_FROM_NAME_DSC", "");
define("_CO_SMLIGHT_ECARD_FROM_EMAIL", "From email");
define("_CO_SMLIGHT_ECARD_FROM_EMAIL_DSC", "");
define("_CO_SMLIGHT_ECARD_DATE", "Date to send");
define("_CO_SMLIGHT_ECARD_DATE_DSC", "This is the date the ecard will be sent.");
define("_CO_SMLIGHT_ECARD_STATUS", "Status");
define("_CO_SMLIGHT_ECARD_STATUS_DSC", "");
define("_CO_SMLIGHT_ECARD_EMAILS", "Emails");
define("_CO_SMLIGHT_ECARD_EMAILS_DSC", "Please list all the email you would like this eCard to be sent to. Separate each emails by a linebreak.<br /><br />Example: <br />test@test.com<br />test2@test.com<br />contact@info.com");
define("_CO_SMLIGHT_ECARD_PICKUPID", "Unique ID for display on the web");
define("_CO_SMLIGHT_ECARD_PICKUPID_DSC", "");

define("_CO_SMLIGHT_ECARD_STATUS_NEW", "New");
define("_CO_SMLIGHT_ECARD_STATUS_SENT", "Sent");
define("_CO_SMLIGHT_ECARD_STATUS_READY", "Compiled and ready to send");
define("_CO_SMLIGHT_ECARD_CLICK_LINK", "Vous avez re�u une carte �lectronique de la part de %s. Cliquez sur ce lien si vous ne voyez par la carte correctement:<br />
%s");
define("_CO_SMLIGHT_ECARD_POWERED", "Cette carte �lectronique a �t� g�n�r�e par SmartMailLight, une cr�ation de INBOX International (<a href='http://inboxinternational.com'>http://inboxinternational.com</a>)");

// list

define("_CO_SMLIGHT_LIST_TITLE", "Title");
define("_CO_SMLIGHT_LIST_TITLE_DSC", "");
define("_CO_SMLIGHT_LIST_DESCRIPTION", "Description");
define("_CO_SMLIGHT_LIST_DESCRIPTION_DSC", "");
define("_CO_SMLIGHT_LIST_FROM_NAME", "Sender name");
define("_CO_SMLIGHT_LIST_FROM_NAME_DSC", "Name of the sender as it will appear in the email. If left blank, the Site Name will be used.");
define("_CO_SMLIGHT_LIST_FROM_EMAIL", "Sender email");
define("_CO_SMLIGHT_LIST_FROM_EMAIL_DSC", "Email of the sender as it will appear in the email. If left blank, the Admin Email will be used.");
define("_CO_SMLIGHT_LIST_TEMPLATE", "Template");
define("_CO_SMLIGHT_LIST_TEMPLATE_DSC", "Name of the template that wull be used when sending a message to this mailing list.");
define("_CO_SMLIGHT_LIST_IMPORT_GROUPS", "Automatically import users from thes groups?");
define("_CO_SMLIGHT_LIST_IMPORT_GROUPS_DSC", "If you would like to manually subscribe users to this mailing list, please select the desired groups here. When you will save this list, the system will look for all users of the selected groups and, all users who did not explicitely configured their subscriptions to not be a member of this list will be added.<br /><br />Please note that this is not a dynamic configuation, it is a ponctual operation. This means that current users of these groups will be added 'now', but you can perform this again later to automaically add newly registered users.");


// template

define("_CO_SMLIGHT_TEMPLATE_NAME", "Name");
define("_CO_SMLIGHT_TEMPLATE_NAME_DSC", "");
define("_CO_SMLIGHT_TEMPLATE_DESCRIPTION", "Description");
define("_CO_SMLIGHT_TEMPLATE_DESCRIPTION_DSC", "");
define("_CO_SMLIGHT_TEMPLATE_CONTENT", "Template content");
define("_CO_SMLIGHT_TEMPLATE_CONTENT_DSC", "Content of the message template. Use the tag {MESSAGE} to say to the template where the message will be inserted");
define("_CO_SMLIGHT_TEMPLATE_ENABLE_ECARD", "Enable this template for eCard ?");
define("_CO_SMLIGHT_TEMPLATE_ENABLE_ECARD_DSC", "If set to Yes, this template will be available to users in the eCard section of this module.");
define("_CO_SMLIGHT_TEMPLATE_SCREENSHOT", "Screenshot");
define("_CO_SMLIGHT_TEMPLATE_SCREENSHOT_DSC", "Screenshot representing this template");
define("_CO_SMLIGHT_TEMPLATE_ECARD_TEMPLATE", "eCard template");
define("_CO_SMLIGHT_TEMPLATE_ECARD_TEMPLATE_DSC", "Content of the eCard template as displayed on the web");

// recipient

define("_CO_SMLIGHT_RECIPIENT_LISTID", "Mailing list");
define("_CO_SMLIGHT_RECIPIENT_LISTID_DSC", "");
define("_CO_SMLIGHT_RECIPIENT_USERID", "User");
define("_CO_SMLIGHT_RECIPIENT_USERID_DSC", "");
define("_CO_SMLIGHT_RECIPIENT_STATUS", "Status");
define("_CO_SMLIGHT_RECIPIENT_STATUS_DSC", "");
define("_CO_SMLIGHT_RECIPIENT_MESSAGEID", "Message");
define("_CO_SMLIGHT_RECIPIENT_MESSAGEID_DSC", "");
define("_CO_SMLIGHT_RECIPIENT_EMAIL_ADDRESS", "Email");
define("_CO_SMLIGHT_RECIPIENT_EMAIL_ADDRESS_DSC", "");
define("_CO_SMLIGHT_RECIPIENT_ECARDID", "eCard");
define("_CO_SMLIGHT_RECIPIENT_ECARDID_DSC", "");


define("_CO_SMLIGHT_RECPIENT_STATUS_NEW", "New");
define("_CO_SMLIGHT_RECPIENT_STATUS_SENT", "Sent");

// user

define("_CO_SMLIGHT_USER_UID", "User");
define("_CO_SMLIGHT_USER_UID_DSC", "");
define("_CO_SMLIGHT_USER_LISTID", "Mailing list");
define("_CO_SMLIGHT_USER_LISTID_DSC", "");
define("_CO_SMLIGHT_USER_ACTIVE", "Active");
define("_CO_SMLIGHT_USER_ACTIVE_DSC", "");

?>