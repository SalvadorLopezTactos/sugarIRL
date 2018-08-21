<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(צוות פרטי בשמירה)',
	'LBL_ASSIGN_TEAM'					=> 'הקצה לצוות',
	'LBL_DEFAULT_TEAM_TEXT'				=> 'קבוצות שזמינות להצגה כברירת מחדל ברישומים הן קבוצות שאתה חבר בהן.',
	'LBL_DEFAULT_TEAM'					=> 'קבוצות ברירת מחדל',
    'LBL_DEFAULT_PRIMARY_TEAM'          => 'קבוצה ראשית ברירת מחדל',
	'LBL_LIST_DESCRIPTION'				=> 'תיאור',
	'LBL_MY_TEAMS'						=> 'הקבוצות שלי',
	'LBL_PRIVATE_TEAM_FOR'				=> 'קבוצה פרטית עבור',
	'LNK_EDIT_TABS'						=> 'ערוך לשוניות',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION'	=> 'Are you sure you want to remove this user\\&#39;s membership?',
	'LBL_TEAMS'							=> 'קבוצות',
	'LBL_TEAM_UPLINE'					=> 'חבר מדווח-אל',
	'LBL_TEAM_UPLINE_EXPLICIT'			=> 'חבר',
    'LBL_TEAM_MEMBERSHIP'               => 'חברות בקבוצה',
    'LBL_TEAM_SET'                      => 'הגדרות קבוצה',
    'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>'.
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => 'האם אתה בטוח שברצונך למחוק משתמש קבוצה זה? לחץ על אישור כדי למחוק את רישום המשתמש. <br/>לאחר לחיצה על אישור, תקבל את האפשרות להקצות מחדש רישומים שהוקצו למשתמש הקבוצה למשתמש אחר.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'האם אתה בטוח שברצונך למחוק משתמש שער API זה? לחץ על אישור כדי למחוק את רישום המשתמש.',

	'LNK_IMPORT_USERS'                 => 'ייבא משתמשים',
	'ERR_DELETE_RECORD'					=> 'יש לציין מספר רישום כדי למחוק את החשבון.',
	'ERR_EMAIL_INCORRECT'				=> 'הזן כתובת דוא"ל תקינה על מנת ליצור ולשלוח את הסיסמה.',
	'ERR_EMAIL_NO_OPTS'					=> 'לא ניתן למצוא הגדרות מיטביות עבור דואר נכנס.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'אנא הזן את אישור הסיסמה שלך.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'אנא הזן את הסיסמה החדשה שלך.',
	'ERR_ENTER_OLD_PASSWORD'			=> 'אנא הזן את הסיסמה הנוכחית שלך.',
	'ERR_IE_FAILURE1'					=> '[לחץ כאן לחזרה]',
	'ERR_IE_FAILURE2'					=> 'קרתה בעיה בהתחברות לחשבון הדוא"ל. אנא בדוק את ההגדרות שלך ונסה שנית.',
	'ERR_IE_MISSING_REQUIRED'			=> "Inbound Email settings are missing required information.<br />  Please check your settings and try again.<br /><br />If you are not setting up Inbound Email, please clear all fields in that section.",
	'ERR_INVALID_PASSWORD'				=> 'עליך לציין שם משתמש וסיסמה חוקיים.',
	'ERR_NO_LOGIN_MOBILE'				=> 'עליך להשלים את ההתחברות הראשונית שלך ליישום זה עם דפדפן לא-סלולרי או במצב רגיל. אנא חזור עם דפדפן מלא או לחץ על הקישור הרגיל שלמטה. אנחנו מתנצלים אם נגרמה אי-נוחות.',
	'ERR_LAST_ADMIN_1'					=> 'שם המשתמש "',
	'ERR_LAST_ADMIN_2'					=> '" הוא שם המשתמש האחרון עם גישה לניהול מערכת. לפחות משתמש אחד חייב להיות מנהל מערכת.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'User password change failed for',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> 'failed.	The new password must be set.',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> 'הסיסמה החדשה לא תקינה.',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> 'Incorrect current password for user',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> 'הזן שוב את פרטי הסיסמה.',
	'ERR_PASSWORD_MISMATCH'				=> 'הסיסמאות לא תואמות.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'עליך לציין שם משתמש וכתובת דוא"ל תקינים.',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'הקישור שלך פג תוקף, אנא צור חדש',
	'ERR_REENTER_PASSWORDS'				=> 'הערכים בשדות סיסמה חדשה ואשר סיסמה לא תואמים.',
	'ERR_REPORT_LOOP'					=> 'המערכת זיהתה לולאת דיווח. משתמש לא יכול לדווח לעצמו, וגם המנהל שלו לא יכול לדווח לו.',
	'ERR_RULES_NOT_MET'                 => 'הסיסמה שהזנת לא עומדת בדרישות הסיסמה. אנא נסה שוב.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'פרטי המשתמש לא נמצאו',
    'ERR_USER_NAME_EXISTS'              => 'שם המשתמש {0} כבר קיים. אין אפשרות לשמות משתמש כפולים. שנה שם המשתמש לערך ייחודי.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'משתמש זה ננעל מחוץ ליישום Sugar ולא יכול להתחבר בעזרת הסיסמה הקיימת שלו.',

	'LBL_PASSWORD_SENT'                => 'הסיסמה עודכנה',
	'LBL_CANNOT_SEND_PASSWORD'         => 'לא ניתן לשלוח סיסמה',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'המערכת לא יכולה לעבד את הבקשה שלך. אנא בדוק את:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'כתובת URL ויציאה של שרת SMTP',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'שם משתמש וסיסמה לשרת SMTP',
	'ERR_RECIPIENT_EMAIL'				=> 'כתובת דוא"ל נמען',
	'ERR_SERVER_STATUS'					=> 'מצב השרת שלך',
	'ERR_SERVER_SMTP_EMPTY'				=> 'המערכת לא יכולה לשלוח הודעת דוא"ל למשתמש. אנא בדוק את תצורת הדואר היוצא בתוך <a href="index.php?module=EmailMan&action=config">הגדרות דוא"ל</a>.',

    'LBL_EMAIL_ADDRESS'                 => 'כתובת דואר אלקטרוני:',

	'LBL_ADDRESS_CITY'					=> 'כתובת עיר',
	'LBL_ADDRESS_COUNTRY'				=> 'כתובת מדינה',
	'LBL_ADDRESS_INFORMATION'			=> 'כתובת מידע',
	'LBL_ADDRESS_POSTALCODE'			=> 'כתובת מיקוד',
	'LBL_ADDRESS_STATE'					=> 'כתובת מדינה',
	'LBL_ADDRESS_STREET'				=> 'כתובת רחוב',
	'LBL_ADDRESS_STREET_2'				=> 'רחוב 2',
	'LBL_ADDRESS_STREET_3'				=> 'רחוב 3',
	'LBL_ADDRESS'						=> 'כתובת',
	'LBL_ADMIN_USER'					=> 'משתמש מנהל מערכת',

	'LBL_ADMIN_DESC'					=> 'המשתמש יכול לגשת לכל הרישומים בדף ניהול המערכת, ללא התחשבות באבטחת הצוות.',
	'LBL_REGULAR_DESC'					=> 'המשתמש יכול לגשת למודולים ורישומים לפי אבטחת ותפקידי הצוות.',
	'LBL_ADMIN'							=> 'מנהל מערכת',
	'LBL_ADVANCED'                     => 'מתקדם',
    'LBL_ANY_ADDRESS'                  => 'כל כתובת:',
	'LBL_ANY_EMAIL'						=> 'Any Email',
	'LBL_ANY_PHONE'						=> 'כל טלפון',
	'LBL_BUTTON_CREATE'					=> 'צור',
	'LBL_BUTTON_EDIT'					=> 'ערוך',
	'LBL_CALENDAR_OPTIONS'				=> 'אפשרויות לוח שנה',
	'LBL_CHANGE_PASSWORD'               => 'שנה סיסמה שנוצרה',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'אנא הזן סיסמה חדשה.',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'סיסמה',
    'LBL_CHOOSE_A_KEY'					=> 'בחר מפתח כדי למנוע פרסום לא מורשה של לוח השנה שלך',
    'LBL_NO_KEY'                        => 'לא הוגדר מפתח. אנא הגדר מפתח על מנת לאפשר פרסום',
	'LBL_CHOOSE_WHICH'					=> 'Choose which tabs are displayed',
	'LBL_CITY'							=> 'עיר',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'נקה',


	'LBL_CONFIRM_PASSWORD'				=> 'אשר סיסמה',
	'LBL_CONFIRM_REGULAR_USER'			=> 'You have changed the user type from System Administrator User to Regular User.  After saving this change, the user will no longer have system administrator privileges.\n\nClick “OK�? to proceed.\nClick “Cancel�? to return to the record.',
	'LBL_COUNTRY'						=> 'מדינה',
	'LBL_CURRENCY_TEXT'					=> 'Select the currency that will be displayed by default when you create new records. This is also the currency that will be displayed in the Amount columns in the Opportunities ListView.',
	'LBL_CURRENCY'						=> 'Currency',
	'LBL_CURRENCY_EXAMPLE'				=> 'דוגמה לתצוגת מטבע',
	'LBL_SYSTEM_SIG_DIGITS'				=> 'ספרות משמעותיות במערכת',
	'LBL_SYSTEM_SIG_DIGITS_DESC' 		=> 'מספר ספרים להצגה במערכת לאחר הנקודה בשבר עשרוני',
    'LBL_CURRENCY_SHOW_PREFERRED'       => 'הצג מטבע מועדף',
    'LBL_CURRENCY_SHOW_PREFERRED_TEXT'  => 'המר מטבע בסיס לבחירת המשתמש במסכים רשימה ורשומות',
	'LBL_NUMBER_GROUPING_SEP'			=> 'מפריד אלפים',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'תו המשמש כדי להפריד אלפים',
	'LBL_DECIMAL_SEP'					=> 'סמל עשרוני',
	'LBL_DECIMAL_SEP_TEXT'				=> 'תו המשמש כדי להפריד מנה עשרונית',
	'LBL_FDOW'					=> 'היום הראשון בשבוע',
	'LBL_FDOW_TEXT'				=> 'היום הראשון שמוצג בתצוגות שבוע, חודש ושנה',
	'LBL_DATE_FORMAT_TEXT'				=> 'הגדר את תבנית התצוגה עבור חותמות תאריך',
	'LBL_DATE_FORMAT'					=> 'תבנית תאריך',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'משתמשים',
	'LBL_DEPARTMENT'					=> 'מחלקה',
	'LBL_DESCRIPTION'					=> 'תיאור',
	'LBL_DISPLAY_TABS'					=> 'Display Tabs',
	'LBL_DOWNLOADS'                    => 'הורדות',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) מציין מעבר לשעון קיץ',
	'LBL_EDIT_TABS'						=> 'Edit Tabs',
	'LBL_EDIT'							=> 'ערוך',
	'LBL_USER_HASH'						=> 'סיסמה',
	'LBL_AUTHENTICATE_ID'				=> 'מזהה אימות',
	'LBL_ACCOUNT_NAME'					=> 'שם חשבון',
	'LBL_USER_PREFERENCES'				=> 'העדפות משתמש',
	'LBL_EXT_AUTHENTICATE'				=> 'אימות חיצוני',
	'LBL_EMAIL_OTHER'					=> 'דוא"ל 2',
	'LBL_EMAIL'							=> 'Email Address',
	'LBL_EMAIL_CHARSET'					=> 'חבילת תווים יוצאים',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'חבר תבנית',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'מלא מראש ברירות מחדל של GMAIL &#153;',
	'LBL_EMAIL_LINK_TYPE'				=> 'חשבון דוא"ל',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar Mail Client:</b> Send emails using the email client in the Sugar application.<br><b>External Mail Client:</b> Send email using an email client outside of the Sugar application, such as Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT'                => 'המערכת לא יכולה לעבד את הבקשה שלך. אנא צור קשר עם מנהל המערכת.',
    'LBL_EMAIL_PROVIDER'               => 'ספק דוא"ל',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'להציג ספירות דוא"ל?',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'This signature requires a name.',
    'LBL_EMAIL_SMTP_SSL'				=> 'הפעל SMTP על SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'לא נבחרה תבנית דוא"ל עבור הדוא"ל שמכילה את הסיסמה שתישלח למשתמש. אנא בחר תבנית דוא"ל בדף ניהול הסיסמה.',
    'LBL_EMPLOYEE_STATUS'				=> 'מצב עובד',
    'LBL_EMPLOYEE_INFORMATION'         => 'פרטי עובד',
	'LBL_ERROR'							=> 'שגיאה',
	'LBL_EXPORT_CHARSET'				=> 'ייבוא/ייצוא חבילת תווים',
	'LBL_EXPORT_CHARSET_DESC'			=> 'בחר את חבילת התווים שמובאת לשימוש באזור שלך. ערך זה ישמש עבור ייבוא נתונים, ייצוא .csv ויצירת vCard.',
	'LBL_EXPORT_DELIMITER'				=> 'תוחם ייצוא',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'ציין את התווים שמשמשים כדי לתחם נתונים מיוצאים.',
	'LBL_FAX_PHONE'						=> 'פקס',
	'LBL_FAX'							=> 'פקס',
	'LBL_FIRST_NAME'					=> 'שם פרטי',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'סיסמה שנוצרה על ידי המערכת',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'אפס סיסמה',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'אפס סיסמה',
    'LBL_GENERATE_PASSWORD'             => 'אפס סיסמה',
	'LBL_GROUP_DESC'					=> 'השתמש עבור הקצאת פריטים לקבוצה (לדוגמה: לדואר נכנס). סוג זה לא יכול להתחבר דרך ממש האינטרנט של Sugar.',
	'LBL_GROUP_USER_STATUS'				=> 'משתמש קבוצה',
	'LBL_GROUP_USER'					=> 'משתמש קבוצה',
	'LBL_HIDE_TABS'						=> 'Hide Tabs',
	'LBL_HOME_PHONE'					=> 'טלפון בית',
	'LBL_INBOUND_TITLE'					=> 'פרטי חשבון',
	'LBL_IS_ADMIN'						=> 'הוא מנהל מערכת',
	'LBL_LANGUAGE'						=> 'שפה',
	'LBL_LAST_NAME'						=> 'שם משפחה',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'שם פרטי/משפחה',
    'LBL_LAYOUT_OPTIONS'                => 'אפשרויות תצורה',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'אימות LDAP',
	'LBL_LIST_ACCEPT_STATUS'			=> 'אשר מצב',
	'LBL_LIST_ADMIN'					=> 'מנהל מערכת',
	'LBL_LIST_DEPARTMENT'				=> 'מחלקה',
	'LBL_LIST_EMAIL'					=> 'Email',
	'LBL_LIST_FORM_TITLE'				=> 'משתמשים',
	'LBL_LIST_GROUP'					=> 'קבוצה',
	'LBL_LIST_LAST_NAME'				=> 'שם משפחה',
	'LBL_LIST_MEMBERSHIP'				=> 'חברות',
	'LBL_LIST_NAME'						=> 'שם',
	'LBL_LIST_PRIMARY_PHONE'			=> 'טלפון עיקרי',
	'LBL_LIST_PASSWORD'					=> 'סיסמה',
	'LBL_LIST_STATUS'					=> 'מצב',
	'LBL_LIST_TITLE'					=> 'כותרת',
	'LBL_LIST_USER_NAME'				=> 'שם משתמש',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'תבנית תצוגת שם',
	'LBL_LOCALE_DESC_FIRST'				=> '[פרטי]',
	'LBL_LOCALE_DESC_LAST'				=> '[משפחה]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[ברכות]',
	'LBL_LOCALE_DESC_TITLE'				=> '[כותרת]',
	'LBL_PICTURE_FILE'					=> 'Picture',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> 'דוגמה',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'הגדר כיצד שמות מופיעים.',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" ברכות<br>"f" שם פרטי<br>"l" שם משפחה</i>',
    'LBL_SAVED_SEARCH'                  => 'חיפוש ותצורה שמורים',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'כניסה למערכת',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'כניסה למערכת [Alt+L]',
	'LBL_LOGIN_WELCOME_TO'				=> 'ברוך הבא אל',
	'LBL_LOGIN_OPTIONS'					=> 'אפשרויות',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'שכחת את הסיסמא?',
    'LBL_LOGIN_SUBMIT'      		    => 'שלח',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'יותר מידי ניסיונות כושלים להכנס למערכת.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'תוכל לנבות להכנס למערכת בתוך',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'ימים.',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 'שעות.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'דקות.',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'שניות.',
    'LBL_LOGIN_ADMIN_CALL'              => 'אנא פנה למנהל המערכת.',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'You have been logged out. To login again please click',
    'LBL_LOGGED_OUT_2' => 'כאן',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> 'הגב לכתובת',
	'LBL_MAIL_FROMNAME'					=> 'הגב לשם',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'הגדרות דוא"ל',
	'LBL_MAIL_SENDTYPE'					=> 'תוכנת העברת דואר',
	'LBL_MAILMERGE_TEXT'				=> 'הפעל מיזוג דואר (מיזוג דואר צריך להיות מופעל גם על ידי מנהל המערכת בהגדרות תצורה)',
	'LBL_MAILMERGE'						=> 'מיזוג דואר',
	'LBL_MAX_TAB'						=> 'Number of Tabs',
    'LBL_MAX_TAB_DESCRIPTION'           => 'Number of tabs shown at the top of the page before an overflow menu appears.',
    'LBL_MAX_SUBTAB'                    => 'מספר לשוניות משנה',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'מספר לשוניות משנה המוצגות בכל לשונית לפני שתפריט גלישה מופיע.',
	'LBL_MESSENGER_ID'					=> 'שם IM',
	'LBL_MESSENGER_TYPE'				=> 'סוג IM',
	'LBL_MOBILE_PHONE'					=> 'סלולרי',
	'LBL_MODIFIED_BY'                  =>'נערך על ידי',
	'LBL_CREATED_BY_NAME' => 'נוצר על ידי', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'נערך על ידי מזהה',
    'LBL_MODULE_NAME'					=> 'משתמשים',
    'LBL_MODULE_NAME_SINGULAR'				=> 'משתמש',
	'LBL_MODULE_TITLE'					=> 'משתמשים: בית',
    'LBL_NAME'							=> 'שם מלא',
    'LBL_SIGNATURE_NAME'                                        =>  'שם',
    'LBL_NAVIGATION_PARADIGM'           => 'ניווט',
    'LBL_USE_GROUP_TABS'                => 'מסנני תפריט מודולים',
	'LBL_NEW_FORM_TITLE'				=> 'משתמש חדש',
	'LBL_NEW_PASSWORD'					=> 'סיסמה חדשה',
	'LBL_NEW_PASSWORD1'					=> 'סיסמה',
	'LBL_NEW_PASSWORD2'					=> 'אשר סיסמה',
    'LBL_NEW_USER_PASSWORD_1' => 'הסיסמה שונתה בהצלחה.',
	'LBL_NEW_USER_PASSWORD_2'			=> 'הודעת דוא"ל שמכילה את הסיסמה שיצרה המערכת נשלחה למשתמש.',
    'LBL_NEW_USER_PASSWORD_3' => 'הסיסמה נוצרה בהצלחה.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'משתמש חדש',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'משתמש חדש',
	'LBL_NORMAL_LOGIN'					=> 'החלף לתצוגה רגילה',
	'LBL_NOTES'							=> 'הערות',
	'LBL_OFFICE_PHONE'					=> 'טלפון משרד',
	'LBL_OLD_PASSWORD'					=> 'סיסמה נוכחית',
	'LBL_OTHER_EMAIL'					=> 'כתובת דוא"ל אחרת',
	'LBL_OTHER_PHONE'					=> 'טלפון אחר',
	'LBL_OTHER'							=> 'אחר',
	'LBL_PASSWORD'						=> 'סיסמה',
    'LBL_PASSWORD_GENERATED'            => 'סיסמה חדשה נוצרה',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'פג תוקף הסיסמה שלך. אנא הזן סיסמה חדשה.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'הסיסמה שלך נוצרה על ידי המערכת',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'פג תוקף הסיסמה שלך. אנא הזן סיסמה חדשה.',

	'LBL_PSW_MODIFIED'                  => 'password last changed',
    'LBL_PHONE'							=> 'טלפון',
	'LBL_PICK_TZ_WELCOME'				=> 'ברוך הבא ל-Sugar.',
	'LBL_PICK_TZ_DESCRIPTION'           => 'לפני שתמשיך, אנא אשר את אזור הזמן שלך. בחר את אזור הזמן המתאים מהרשימה שלמטה, ולחץ על שמירה כדי להמשיך. ניתן לשנות את אזור הזמן בכל עת בהגדרות המשתמש שלך.',
	'LBL_PORTAL_ONLY_DESC'				=> 'השתמש עבור שער API. סוג זה לא יכול להתחבר דרך ממש האינטרנט של Sugar.',
	'LBL_PORTAL_ONLY_USER'					=> 'משתמש שער API',
	'LBL_POSTAL_CODE'					=> 'מיקוד',
	'LBL_PRIMARY_ADDRESS'				=> 'כתובת עיקרית',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'Check to have the user goto the User Wizard on login.',
	'LBL_PROMPT_TIMEZONE'				=> 'User Wizard prompt',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'Provide both a User Name and an Email Address.',
    'LBL_FORGOTPASSORD_NOT_ENABLED' 	=> 'זה לא פעיל כעת. אנא צור קשר עם המנהל',
	'LBL_PUBLISH_KEY'					=> 'פרסם מפתח',

    'LBL_QUOTAS'                        => 'מיכסות',
    'LBL_FORECASTS'                     => 'תחזיות',
    'LBL_WORKSHEETS'                    => 'גליונות עבודה',
	'LBL_CALENDARS'                     => 'לוחות שנה',
	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'השג CAPTCHA אחרת',
	'LBL_RECAPTCHA_SOUND'				=> 'החלף לשמע',
	'LBL_RECAPTCHA_IMAGE'				=> 'החלף לתמונה',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'הזן את שתי המילים שלמטה',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'הזן את שתי המילים שמצד ימין',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'הזן את הטקסט שמופיע בתמונה.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'מפתח פרטי Recaptcha לא תקין',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'פרמטר האתגר של סקריפט האימות Recaptcha היה שגוי.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'שגיאת Recaptcha לא ידועה',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'קבל התראה בהודעת דוא"ל כאשר מוקצה לך רישום.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'שלח התראה על הקצאה',
	'LBL_REGISTER'                      => 'משתמש חדש? אנא הירשם',
	'LBL_REGULAR_USER'                  => 'משתמש רגיל',
	'LBL_REMINDER_TEXT'					=> 'Set a default for reminders for calls and meetings.',
	'LBL_REMINDER'						=> 'תזכורות',
	'LBL_REMINDER_POPUP' => 'הודעה קופצת',
	'LBL_REMINDER_EMAIL' => 'דואר אלקטרוני',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'שלח מייל לכל המוזמנים',
	'LBL_REMOVED_TABS'					=> 'לשוניות הסרת מנהל מערכת',
	'LBL_REPORTS_TO_NAME'				=> 'מדווח ל',
	'LBL_REPORTS_TO'					=> 'מדווח ל',
    'LBL_REPORTS_TO_ID'                => 'מדווח למזהה:',
	'LBL_REQUEST_SUBMIT'				=> 'הבקשה שלך הוגשה.',
	'LBL_RESET_TO_DEFAULT'				=> 'הבקשה שלך הוגשה',
	'LBL_RESET_PREFERENCES'				=> 'אפס העדפות משתמש',
    'LBL_RESET_PREFERENCES_WARNING'     => 'האם אתה בטוח שברצונך לאפס את כל העדפות המשתמש שלך? אזהרה: זה גם ינתק אותך מהיישום.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'האם אתה בטו חשברצונך לאפס את כל ההעדפות של משתמש זה?',
    'LBL_RESET_DASHBOARD'               => 'אפס לוח מכוונים',
	'LBL_SALUTATION'                    => 'ברכות',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'תפקידים',
	'LBL_SEARCH_FORM_TITLE'				=> 'חיפוש משתמש',
	'LBL_SEARCH_URL'					=> 'חפש מיקום',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'בחר משתמשים מסומנים',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'בחר משתמשים מסומנים',
	'LBL_SETTINGS_URL_DESC'				=> 'השתמש בכתובת דוא"ל זו בעת קביעת הגדרות התחברות עבור התוסף של Sugar ל-Microsoft&reg; Outlook&reg; והתוסף של Sugar ל-Microsoft&reg; Word&reg;.',
	'LBL_SETTINGS_URL'					=> 'כתובת URL',
	'LBL_SIGNATURE'						=> 'Signature',
	'LBL_SIGNATURE_HTML'				=> 'HTML signature',
	'LBL_SIGNATURE_DEFAULT'				=> 'Use signature?',
	'LBL_SIGNATURE_PREPEND'				=> 'Signature above reply?',
	'LBL_SIGNATURES'					=> 'Signatures',
	'LBL_STATE'							=> 'מדינה',
	'LBL_STATUS'						=> 'מצב',
    'LBL_SUBPANEL_LINKS'                => 'קישורי פאנל-משנה',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'בתצוגות מפורטות, מציג שורה של קישורים שהם קיצורי דרך לפאנל משנה.',
    'LBL_SUGAR_LOGIN'					=> 'הוא משתמש Sugar',
    'LBL_SUPPORTED_THEME_ONLY'          => 'משפיע רק על ערכות נושא שתומכות באפשרות זו.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'אם סומן, מציג את הסרגל נצפו לאחרונה בצד. אחרת עובר לראש הדף.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'אם סומן, מציג את סרגל קיצורי הדרך. אחרת עובר לצד.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => 'נצפו לאחרונה בצד',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'קיצורי דרף בראש הדף',
	'LBL_TAB_TITLE_EMAIL'				=> 'הגדרות דוא"ל',
	'LBL_TAB_TITLE_USER'				=> 'הגדרות משתמש',
	'LBL_THEME'							=> 'ערכות נושא',
	'LBL_THEME_COLOR'					=> 'צבע',
	'LBL_THEME_FONT'					=> 'גופן',
	'LBL_TIME_FORMAT_TEXT'				=> 'הגדר את תבנית התצוגה עבור חותמות זמן',
	'LBL_TIME_FORMAT'					=> 'תבנית זמן',
	'LBL_TIMEZONE_DST_TEXT'				=> 'עבור לשעון קיץ',
	'LBL_TIMEZONE_DST'					=> 'שעון קיץ',
	'LBL_TIMEZONE_TEXT'					=> 'Set the current time zone',
	'LBL_TIMEZONE'						=> 'אזור זמן',
	'LBL_TITLE'							=> 'Title',
	'LBL_USE_REAL_NAMES'				=> 'הצג שמות מלאים',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Display users&#39; full names instead of their User Names in assignment fields.',
	'LBL_USER_INFORMATION'				=> 'פרופיל משתמש',
	'LBL_USER_LOCALE'					=> 'הגדרות מקומיות',
	'LBL_USER_NAME'						=> 'שם משתמש',
	'LBL_USER_SETTINGS'					=> 'הגדרות משתמש',
	'LBL_USER_TYPE'		   			    => 'סוג משתמש',
	'LBL_USER_ACCESS'                  => 'גישה',
	'LBL_USER'							=> 'משתמשים',
	'LBL_WORK_PHONE'					=> 'טלפון עבודה',
	'LBL_YOUR_PUBLISH_URL'				=> 'פרסם במיקום שלי',
    'LBL_ICAL_PUB_URL'                  => 'URL להטמעת iCal',
    'LBL_ICAL_PUB_URL_HELP'             => 'השתמש בכתובת URL זו כדי להירשם כמנוי ללוח השנה שלך ב-Sugar באפליקציות הנתמכות על ידי iCal.' .
                                           ' אירועי לוח השנה של Sugar ניתנים להצגה לקריאה בלבד ' .
                                           'באפליקציות לוח שנה חיצוניות וכל פעולת עריכה באירועים ' .
                                           '(למשל ישיבות, שיחות ועוד) ניתן לבצע רק ב-Sugar.',
	'LBL_YOUR_QUERY_URL'				=> 'URL של השאילתא שלך',
	'LNK_NEW_USER'						=> 'צור משתמש חדש',
	'LNK_NEW_PORTAL_USER'				=> 'צור משתמש שער API',
	'LNK_NEW_GROUP_USER'				=> 'צור משתמש קבוצה',
	'LNK_USER_LIST'						=> 'הצג משתמשים',
	'LNK_REASSIGN_RECORDS'				=> 'הקצה מחדש רישומים',
    'LBL_PROSPECT_LIST'                 => 'רשימת הזדמנויות',
    'LBL_EMAILS'                        => 'דואר אלקטרוני',
    'LBL_PROCESSING'                    => 'מעבד',
    'LBL_UPDATE_FINISH'                 => 'העדכון הושלם',
    'LBL_AFFECTED'                      => 'מושפע',

    'LBL_USER_NAME_FOR_ROLE'            =>'משתמשים/קבוצות/תפקידים',
    'LBL_SESSION_EXPIRED'               => 'נותקת מהמערכת מכיוון שפג התוקף של ההפעלה שלך.',

    'LBL_TOO_MANY_CONCURRENT'           => 'הפעלה זו הסתיימה מכיוון שהפעלה אחרת התחילה תחת אותו שם משתמש.',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> 'הקצה מחדש רישומים',
	'LBL_REASS_DESC_PART1'				=> 'Find all records in the selected modules that are assigned to a user, and reassign them to another user.',
        'LBL_REASS_DESC_PART2'=>                    'בחר כנגד אילו מודולים להפעיל זרימות עבודה, לשלוח התראות משימה, ולבצע מעקב ביקורת במהלך הקצאה מחדש. לחץ על הבא כדי להמשיך ולהקצות רישומים מחדש. לחץ על התחל מחדש כדי להתחיל מהתחלה.',
	'LBL_REASS_STEP2_TITLE'				=> 'הקצאה מחדש לצוותים',
	'LBL_REASS_STEP2_DESC'				=> 'The teams listed below were available in the from user&#39;s team, but not in the to user&#39;s team. All records in the From User&#39;s team will not be visible in the To User team unless the team values are mapped.',
	'LBL_REASS_USER_FROM_TEAM'			=> 'מצוות משתמשים:',
	'LBL_REASS_USER_TO_TEAM'			=> 'לצוות משתמשים:',
	'LBL_REASS_USER_FROM'				=> 'מהמשתמש:',
	'LBL_REASS_USER_TO'					=> 'למשתמש:',
	'LBL_REASS_TEAM_TO'					=> 'הגדר צוותים ל:',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> 'The To user has access to all of the From user&#39;s teams. No mapping necessary. Redirecting to the next page in 5 seconds.',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '--- אין שינוי ---',
	'LBL_REASS_NOT_PROCESSED' 			=> 'לא ניתן לעבד:',
	'LBL_REASS_MOD_REASSIGN' 			=> 'מודולים לצירוף בהקצאה מחדש:',
	'LBL_REASS_FILTERS'					=> 'מסננים',
	'LBL_REASS_NOTES_TITLE'				=> 'הערות:',
	'LBL_REASS_NOTES_THREE'				=> 'Even if you don&#39;t include Auditing, the Date Modified and Modified By are still updated accordingly.',
	'LBL_REASS_NOTES_ONE'				=> 'Assigning records to yourself will not trigger assignment notifications.',
	'LBL_REASS_NOTES_TWO'				=> 'Including Workflow, Notifications, and Audit tracking in the reassignment is significantly slower.',
	'LBL_REASS_VERBOSE_OUTPUT'			=> 'Verbose output (applies only to reassignment tasks that include workflows)',
        'LBL_REASS_VERBOSE_HELP'                     =>  'בחר באפשרות זו כדי להציג מידע מפורט אודות המשימות להקצאה מחדש שכוללות זרימות עבודה.',
	'LBL_REASS_ASSESSING'				=> 'מעריך',
	'LBL_REASS_RECORDS_FROM'			=> 'רישומים מ',
	'LBL_REASS_WILL_BE_UPDATED'			=> 'יעודכנו.',
	'LBL_REASS_WORK_NOTIF_AUDIT' => 'כלול זרימת עבודה/התראות/ביקורת (איטי יותר משמעותית)',
	'LBL_REASS_SUCCESS_ASSIGN'			=> 'הוקצה בהצלחה',
	'LBL_REASS_FROM'					=> 'מ',
	'LBL_REASS_TO'						=> 'ל',
	'LBL_REASS_TEAM_SET_TO'				=> 'והצוותים הוגדרו ל',
	'LBL_REASS_FAILED_SAVE'				=> 'כישלון בעת שמירה ברישום',
	'LBL_REASS_THE_FOLLOWING'			=> 'הבאים',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> 'עודכנו:',
    'LBL_REASS_CANNOT_PROCESS'		    => 'לא ניתן לעבד:',
	'LBL_REASS_NONE'					=> 'אין',
	'LBL_REASS_UPDATE_COMPLETE'			=> 'העדכון הושלם',
	'LBL_REASS_SUCCESSFUL'				=> 'מוצלח',
	'LBL_REASS_FAILED'					=> 'נכשל',
	'LBL_REASS_BUTTON_SUBMIT' 			=> 'Submit',
	'LBL_REASS_BUTTON_CLEAR' 			=> 'נקה',
	'LBL_REASS_BUTTON_CONTINUE'			=> 'Continue',
    'LBL_REASS_BUTTON_REASSIGN'         => 'הקצה מחדש',
	'LBL_REASS_BUTTON_GO_BACK' 			=> 'Go Back',
	'LBL_REASS_BUTTON_RESTART' 			=> 'התחל מחדש',
	'LBL_REASS_BUTTON_RETURN' 			=> 'חזרה',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> 'Would you like to reassign all of this user&#39;s records?',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'כן',
  'LBL_REASS_CONFIRM_REASSIGN_NO'    => 'לא',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE'    => 'הקצה מחדש',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> 'אנא חזור אחורה ובחר לפחות מודול אחד.',
	'ERR_REASS_DIFF_USERS'				=> 'Please select an assign to user that is different from the assign from user.',
// END MASS REASSIGNMENT SCRIPT STRINGS

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'החל ערכים מיטביים',
	'LBL_ASSIGN_TO_USER'				=> 'הקצה למשתמש',
	'LBL_BASIC'							=> 'הגדרה נכנסת',
	'LBL_CERT_DESC'						=> 'Force validation of the mail server&#39;s Security Certificate - do not use if self-signing.',
	'LBL_CERT'							=> 'אמת תעודה',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>מציאת משתני חיבור מיטבי.',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'מצא תצורה מיטבית',
	'LBL_FORCE'							=> 'אלץ שלילי',
	'LBL_FORCE_DESC'					=> 'שרתי IMAP/POP3 מסוימים דורשים החלפות מיוחדות. בדוק כדי לאלץ החלפה שלילית בעת ההתחברות (כלומר, /notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>נמצא הגדרות מיטביות. לחץ על הכפתור שלמטה כדי להחיל אותן בתיבת הדואר שלך.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'הגדרות דואר נכנס',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'הגדרות דואר יוצא',
	'LBL_LOGIN'							=> 'שם משתמש',
	'LBL_MAILBOX_DEFAULT'				=> 'תיבת דואר נכנס',
	'LBL_MAILBOX_SSL_DESC'				=> 'השתמש ב-SSL בעת ההתחברות, אם זה לא עובד, בדוק שהתקנת ה-PHP שלך כוללת "--with-imap-ssl" בהגדרות.',
	'LBL_MAILBOX'						=> 'תיקייה בבקרה',
	'LBL_MAILBOX_TYPE'					=> 'פעולות אפשריות',
	'LBL_MARK_READ_NO'					=> 'הודעת דוא"ל שסומנה כמחוקה לאחר הייבוא',
	'LBL_MARK_READ_YES'					=> 'הודעת דוא"ל שנותרה בשרת לאחר הייבוא',
	'LBL_MARK_READ_DESC'				=> 'ייבא וסמן הודעות שנקראו בשרת הדואר; אל תמחוק.',
	'LBL_MARK_READ'						=> 'השאר הודעות בשרת',
	'LBL_ONLY_SINCE_NO'					=> 'לא, בדוק כנגד כל הודעות הדוא"ל בשרת הדואר.',
	'LBL_ONLY_SINCE_YES'				=> 'כן.',
	'LBL_ONLY_SINCE_DESC'				=> 'PHP לא יכול להבחין בין הודעות חדשות לבין הודעות שלא נקראו בעת שימוש ב-POP3. בדוק דגל זה כדי לסרוק עבור הודעות מאז הפעם האחרונה שחשבון הדואר נבדק. זה ישפר את הביצועים משמעותית אם שרת הדואר שלך לא יכול לתמוך ב-IMAP.',
	'LBL_ONLY_SINCE'					=> 'ייבא מאז הבדיקה האחרונה בלבד',
	'LBL_PORT'							=> 'יציאת שרת דואר',
	'LBL_SERVER_OPTIONS'				=> 'הגדרות מתקדמות',
	'LBL_SERVER_TYPE'					=> 'פרוטוקול שרת דואר',
	'LBL_SERVER_URL'					=> 'כתובת שרת דואר',
	'LBL_SSL'							=> 'השתמש ב-SSL',
	'LBL_SSL_DESC'						=> 'השתמש בשכבת Socket מאובטחת בעת ההתחברות לשרת הדואר שלך.',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'					=> 'הגדרות בדיקה',
	'LBL_TEST_SUCCESSFUL'				=> 'החיבור הושלם בהצלחה.',
	'LBL_TLS_DESC'						=> 'השתמש באבטחת שכבת Transport בעת ההתחברות לשרת הדואר - השתמש בזה רק אם שרת הדואר שלך תומך בפרוטוקול זה.',
	'LBL_TLS'							=> 'השתמש ב-TLS',
	'LBL_TOGGLE_ADV'					=> 'הצג מתקדם',
    'LBL_OWN_OPPS'                      => 'אין הזדמנויות',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'אשר משתמש זה רק דרך',
	'LBL_ONLY'							=> 'בלבד',
    'LBL_OWN_OPPS_DESC'                 => 'בחר כדי לא להקצות הזדמנויות למשתמש. השתמש בהגדרה זו עבור משתמשים שהם מנהלים שאינם מעורבים בפעילויות המכר. ההגדרה נועדה למודול החיזוי.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'שגיאת LDAP: אנא צור קשר עם מנהל מערכת',
	'LBL_LDAP_EXTENSION_ERROR' => 'שגיאת LDAP: לא נטענו הרחבות',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'חגי משתמש',
	'LBL_RESOURCE_NAME' => 'שם',
	'LBL_RESOURCE_TYPE' => 'Type',

	'LBL_PDF_SETTINGS'  =>  'הגדרות PDF',
	'LBL_PDF_PAGE_FORMAT'  =>  'תבנית דף',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'התבנית שמשמשת עבור דפים',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'יישור דף',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  'דיוקן',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  'נוף',
	'LBL_PDF_MARGIN_HEADER'  =>  'שולי כותרת עליונה',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'שולי כותרת תחתונה',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  'שוליים עליונים',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  'שוליים תחתונים',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  'שוליים שמאליים',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  'שולים ימניים',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'גופן עבור כותרת עליונה וגוף',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  'הגופן שנבחר יוחל בטקסט שבכותרת העליונה ובגוף של מסמך ה-PDF',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'גודל גופן ראשי',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'גופן עבור כותרת תחתונה',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  'הגופן שנבחר יוחל בטקסט שבכותרת התחתונה של מסמך ה-PDF',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'גודל גופן נתונים',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'בחרת את עצמך. אתה לא יכול לשנות את סוג או את מצב המשתמש של עצמך.',
	'LBL_SMTP_SERVER_HELP' => 'ניתן להשתמש בשרת דואר SMTP זה עבור דואר יוצא. הזן שם משתמש וסיסמה עבור חשבון הדוא"ל שלך על מנת להשתמש בשרת הדואר.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'מנהל המערכת עוד לא הגדיר את החשבון היוצא ברירת מחדל. לא ניתן לשלוח דוא"ל בדיקה.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'להשתמש באימות SMTP?',
	'LBL_MAIL_SMTPPASS'					=> 'סיסמת SMTP:',
	'LBL_MAIL_SMTPPORT'					=> 'יציאת SMTP:',
	'LBL_MAIL_SMTPSERVER'				=> 'שרת SMTP:',
	'LBL_MAIL_SMTPUSER'					=> 'שם משתמש SMTP:',
	'LBL_MAIL_SMTPTYPE'                => 'סוג שרת SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'מפרט שרת SMTP',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'בחר את ספק הדוא"ל שלך:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'סיסמת Yahoo! Mail:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'מזהה Yahoo! Mail:',
	'LBL_GMAIL_SMTPPASS'					=> 'סיסמה של Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'כתובת דוא"ל של Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'סיסמה של Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'שם משתמש של Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'יציאת שרת של Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'שרת Exchange:',
        'LBL_OK'   =>'אישור',
        'LBL_CANCEL'    => 'בטל',
        'LBL_DELETE_USER' => 'מחק משתמש',
	// Wizard
	'LBL_WIZARD_TITLE' => 'אשף המשתמש',
    'LBL_WIZARD_WELCOME_TAB' => 'ברוך הבא',
    'LBL_WIZARD_WELCOME_TITLE' => 'ברוך הבא ל-Sugar!',
    'LBL_WIZARD_WELCOME' => 'לחץ על <b>הבא</b> כדי לקבוע את התצורה של מספר הגדרות בסיסיות לשימוש ב-Sugar.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'לחץ על <b>הבא</b> כדי לקבוע את התצורה של מספר הגדרות בסיסיות לשימוש ב-Sugar.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Next >',
    'LBL_WIZARD_BACK_BUTTON' => '< Back',
    'LBL_WIZARD_SKIP_BUTTON' => 'דלג',
    'LBL_WIZARD_FINISH_BUTTON' => 'סיום',
    'LBL_WIZARD_FINISH_TAB' => 'סיום',
    'LBL_WIZARD_FINISH_TITLE' => 'אתה מוכן להשתמש ב-Sugar!',

    'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using Sugar. For more information on using Sugar:<br /><br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>Get a head start with training and resources for end-users, power-users and system administrators at Sugar University.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product documentation to get you started with all flavors of Sugar and official Sugar Plug-Ins and extensions.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>A collection of articles on accomplishing common tasks and answers to frequently asked questions.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/wiki.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/wiki" target="_blank"><b>Wiki</b></a><br>A collection of articles on accomplishing common tasks and answers to frequently asked questions.</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Community and Sugar team members hang out here dicussing all things Sugar.</td></tr><br /></table>',

    'LBL_WIZARD_FINISH1' => 'מה הדבר הבא שתרצה לעשות',
    'LBL_WIZARD_FINISH2' => 'התחל להשתמש במערכת',
    'LBL_WIZARD_FINISH3' => 'ייבוא נתונים',
    'LBL_WIZARD_FINISH4' => 'ייבוא נתונים ממקור חיצוני',
    'LBL_WIZARD_FINISH5' => 'צור משתמש',
    'LBL_WIZARD_FINISH6' => 'צור חשבונות משתמשים חדשים כדי שאנשים יוכלו לגשת ליישום.',
    'LBL_WIZARD_FINISH7' => 'הצג ונהל הגדרות יישום',
    'LBL_WIZARD_FINISH8' => 'נהל הגדרות מתקדמות, כולל הגדרות יישום ברירת מחדל.',
    'LBL_WIZARD_FINISH9' => 'Configure the Application',
    'LBL_WIZARD_FINISH10' => 'השתמש ב-Studio כדי ליצור ולנהל את השדות והתצורות של היישום.',
    'LBL_WIZARD_FINISH11' => 'Visit Sugar University',
    'LBL_WIZARD_FINISH12' => 'מצא חומרי ושיעורי הדרכה שיעזרו לך להתחיל כמנהל מערכת או משתמש קצה של היישום.',
    'LBL_WIZARD_FINISH14' => 'תיעוד',
    'LBL_WIZARD_FINISH15' => 'Product Guides and Release Notes',
    'LBL_WIZARD_FINISH16' => 'Knowledge Base',
    'LBL_WIZARD_FINISH17' => 'Tips from SugarCRM Support for performing common tasks and processes in Sugar',
    'LBL_WIZARD_FINISH18' => 'Forums',
    'LBL_WIZARD_FINISH19' => 'Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers',
    'LBL_WIZARD_FINISH2DESC' => 'עבור ישירות לדף הבית של היישום.',
    'LBL_WIZARD_PERSONALINFO' => 'המידע שלך',
    'LBL_WIZARD_LOCALE' => 'האזור שלך',
    'LBL_WIZARD_SMTP' => 'חשבון הדוא"ל שלך',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'הזן מידע על עצמך. המידע שאתה מזין על עצמך יהיה גלוי למשתמשי Sugar אחרים.<br />שדות המסומנים ב-<span class="required">*</span> הם שדות חובה.',
    'LBL_WIZARD_LOCALE_DESC' => 'ציין את אזור הזמן שלך ואת הדרך שבה תרצה שתאריכים, מטבעות ושמות יופיעו ב-Sugar.',
    'LBL_WIZARD_SMTP_DESC' => 'הזן את שם המשתמש והסיסמה עבור חשבון הדוא"ל שלך בשביל שרת הדואר ברירת המחדל לדואר יוצא.',
	'LBL_EAPM_SUBPANEL_TITLE' => 'חשבונות חיצוניים',

	'LBL_EDITLAYOUT' => 'ערוך תצורה' /*for 508 compliance fix*/,
	'LBL_HELP' => 'עזרה' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => 'סימון' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => 'תצוגה מקדימה' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'אסימוני OAuth',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "אסימוני גישה OAuth",

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'שונה על ידי ID',
    'LBL_PHONE_HOME' => 'טלפון בבית',
    'LBL_PHONE_MOBILE' => 'טלפון נייד',
    'LBL_PHONE_WORK' => 'טלפון בעבודה',
    'LBL_PHONE_OTHER' => 'טלפון אחר',
    'LBL_PHONE_FAX' => 'טלאפקס',
    'LBL_PORTAL_ONLY' => 'שער בלבד',
    'LBL_SHOW_ON_EMPLOYEES' => 'הצג רשומות של העובד',
    'LBL_IS_GROUP' => 'זו קבוצה',
    'LBL_EXPORT_CREATED_BY' => 'נוצר על ידי ID',

    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_DATE_ENTERED' => 'הוזן בתאריך',
    'LBL_DELETED' => 'נמחק',
    'LBL_HIDEOPTIONS' => 'הסתר אפשרויות',
    'LBL_SHOWOPTIONS' => 'הצג אפשרויות',

    'LBL_FILTER_USERS_REPORTS' => 'דוחות משתמש',
    'LBL_CONTACTS_SYNC' => 'אנשי קשר',
    'LBL_DETAIL' => 'פרופיל משתמש',
); // END STRINGS DEFS

?>
