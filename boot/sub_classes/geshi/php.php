<?php
/*************************************************************************************
 * php.php
 * --------
 * Author: Nigel McNie (nigel@geshi.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.1
 * Date Started: 2004/06/20
 *
 * PHP language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 * 2004/11/25 (1.0.3)
 *  -  Added support for multiple object splitters
 *  -  Fixed &new problem
 * 2004/10/27 (1.0.2)
 *  -  Added URL support
 *  -  Added extra constants
 * 2004/08/05 (1.0.1)
 *  -  Added support for symbols
 * 2004/07/14 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/07/14)
 * -------------------------
 * * Make sure the last few function I may have missed
 *   (like eval()) are included for highlighting
 * * Split to several files - php4, php5 etc
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'PHP',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("\'"),
    'COMMENT_REGEXP' => array(
        //Heredoc and Nowdoc syntax
        3 => '/<<<\s*?(\'?)([a-zA-Z0-9]+?)\1[^\n]*?\\n.*\\n\\2(?![a-zA-Z0-9])/siU',
        // phpdoc comments
        4 => '#/\*\*(?!\*).*\*/#sU'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[nfrtv\\$\\\"\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{1,2}#i",
        //Octal Char Specs
        3 => "#\\\\[0-7]{1,3}#",
        //String Parsing of Variable Names
        4 => "#\\$[a-z0-9_]+(?:\\[[a-z0-9_]+\\]|->[a-z0-9_]+)?|(?:\\{\\$|\\$\\{)[a-z0-9_]+(?:\\[('?)[a-z0-9_]*\\1\\]|->[a-z0-9_]+)*\\}#i",
        //Experimental extension supporting cascaded {${$var}} syntax
        5 => "#\$[a-z0-9_]+(?:\[[a-z0-9_]+\]|->[a-z0-9_]+)?|(?:\{\$|\$\{)[a-z0-9_]+(?:\[('?)[a-z0-9_]*\\1\]|->[a-z0-9_]+)*\}|\{\$(?R)\}#i",
        //Format String support in ""-Strings
        6 => "#%(?:%|(?:\d+\\\\\\\$)?\\+?(?:\x20|0|'.)?-?(?:\d+|\\*)?(?:\.\d+)?[bcdefFosuxX])#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |  GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'include', 'require', 'include_once', 'require_once',
            'for', 'foreach', 'as', 'if', 'elseif', 'else', 'while', 'do', 'endwhile',
            'endif', 'switch', 'case', 'endswitch', 'endfor', 'endforeach',
            'return', 'break', 'continue'
            ),
        2 => array(
            '%&gt;', '&amp;new', '&lt;%', '&lt;%=',
            '&lt;/script&gt;', '&lt;?', '&lt;?=', '&lt;?php',
            '&lt;script language', '?&gt;', 'class', 'const',
            'default', 'DEFAULT_INCLUDE_PATH', 'extends',
            'E_ALL', 'E_COMPILE_ERROR', 'E_COMPILE_WARNING',
            'E_CORE_ERROR', 'E_CORE_WARNING', 'E_ERROR',
            'E_NOTICE', 'E_PARSE', 'E_STRICT', 'E_USER_ERROR',
            'E_USER_NOTICE', 'E_USER_WARNING', 'E_WARNING',
            'false', 'function', 'interface', 'new', 'null',
            'PEAR_EXTENSION_DIR', 'PEAR_INSTALL_DIR',
            'PHP_BINDIR', 'PHP_CONFIG_FILE_PATH', 'PHP_DATADIR',
            'PHP_EXTENSION_DIR', 'PHP_LIBDIR',
            'PHP_LOCALSTATEDIR', 'PHP_OS',
            'PHP_OUTPUT_HANDLER_CONT', 'PHP_OUTPUT_HANDLER_END',
            'PHP_OUTPUT_HANDLER_START', 'PHP_SYSCONFDIR',
            'PHP_VERSION', 'private', 'public', 'self', 'true',
            'var', '__CLASS__', '__FILE__', '__FUNCTION__',
            '__LINE__', '__METHOD__'
            ),
        3 => array(
            'abs', 'acos', 'acosh', 'addcslashes', 'addslashes', 'aggregate',
            'aggregate_methods', 'aggregate_methods_by_list',
            'aggregate_methods_by_regexp',
            'aggregate_properties',
            'aggregate_properties_by_list',
            'aggregate_properties_by_regexp', 'aggregation_info',
            'apache_child_terminate', 'apache_get_version',
            'apache_lookup_uri', 'apache_note',
            'apache_request_headers', 'apache_response_headers',
            'apache_setenv', 'array', 'array_change_key_case',
            'array_chunk', 'array_count_values', 'array_diff',
            'array_diff_assoc', 'array_fill', 'array_filter',
            'array_flip', 'array_intersect',
            'array_intersect_assoc', 'array_keys',
            'array_key_exists', 'array_map', 'array_merge',
            'array_merge_recursive', 'array_multisort',
            'array_pad', 'array_pop', 'array_push', 'array_rand',
            'array_reduce', 'array_reverse', 'array_search',
            'array_shift', 'array_slice', 'array_splice',
            'array_sum', 'array_unique', 'array_unshift',
            'array_values', 'array_walk', 'arsort', 'asin',
            'asinh', 'asort', 'assert', 'assert_options', 'atan',
            'atan2', 'atanh', 'base64_decode', 'base64_encode',
            'basename', 'base_convert', 'bcadd', 'bccomp',
            'bcdiv', 'bcmod', 'bcmul', 'bcpow', 'bcscale',
            'bcsqrt', 'bcsub', 'bin2hex', 'bindec',
            'bindtextdomain', 'bind_textdomain_codeset',
            'bzclose', 'bzcompress', 'bzdecompress', 'bzerrno',
            'bzerror', 'bzerrstr', 'bzflush', 'bzopen', 'bzread',
            'bzwrite', 'call_user_func', 'call_user_func_array',
            'call_user_method', 'call_user_method_array',
            'cal_days_in_month', 'cal_from_jd', 'cal_info',
            'cal_to_jd', 'ceil', 'chdir', 'checkdate',
            'checkdnsrr', 'chgrp', 'chmod', 'chop', 'chown',
            'chr', 'chunk_split', 'class_exists',
            'clearstatcache', 'closedir', 'closelog', 'compact',
            'connection_aborted', 'connection_status',
            'constant', 'convert_cyr_string', 'copy', 'cos',
            'cosh', 'count', 'count_chars', 'crc32',
            'create_function', 'crypt', 'ctype_alnum',
            'ctype_alpha', 'ctype_cntrl', 'ctype_digit',
            'ctype_graph', 'ctype_lower', 'ctype_print',
            'ctype_punct', 'ctype_space', 'ctype_upper',
            'ctype_xdigit', 'current', 'date', 'dba_close',
            'dba_delete', 'dba_exists', 'dba_fetch',
            'dba_firstkey', 'dba_handlers', 'dba_insert',
            'dba_list', 'dba_nextkey', 'dba_open',
            'dba_optimize', 'dba_popen', 'dba_replace',
            'dba_sync', 'dcgettext', 'dcngettext', 'deaggregate',
            'debug_backtrace', 'debug_zval_dump', 'decbin',
            'dechex', 'decoct', 'define', 'defined',
            'define_syslog_variables', 'deg2rad', 'dgettext',
            'die', 'dir', 'dirname', 'diskfreespace',
            'disk_free_space', 'disk_total_space', 'dl',
            'dngettext', 'doubleval', 'each', 'easter_date',
            'easter_days', 'echo', 'empty', 'end', 'ereg',
            'eregStrt', 'eregStrt_replace', 'ereg_replace',
            'error_log', 'error_reporting', 'escapeshellarg',
            'escapeshellcmd', 'eval', 'exec', 'exif_imagetype',
            'exif_read_data', 'exif_tagname', 'exif_thumbnail',
            'exit', 'exp', 'explode', 'expm1',
            'extension_loaded', 'extract', 'ezmlm_hash',
            'fclose', 'feof', 'fflush', 'fgetc', 'fgetcsv',
            'fgets', 'fgetss', 'file', 'fileatime', 'filectime',
            'filegroup', 'fileinode', 'filemtime', 'fileowner',
            'fileperms', 'filepro', 'filepro_fieldcount',
            'filepro_fieldname', 'filepro_fieldtype',
            'filepro_fieldwidth', 'filepro_retrieve',
            'filepro_rowcount', 'filesize', 'filetype',
            'file_exists', 'file_get_contents', 'floatval',
            'flock', 'floor', 'flush', 'fmod', 'fnmatch',
            'fopen', 'fpassthru', 'fputs', 'fread', 'frenchtojd',
            'fscanf', 'fseek', 'fsockopen', 'fstat', 'ftell',
            'ftok', 'ftp_cdup', 'ftp_chdir', 'ftp_close',
            'ftp_connect', 'ftp_delete', 'ftp_exec', 'ftp_fget',
            'ftp_fput', 'ftp_get', 'ftp_get_option', 'ftp_login',
            'ftp_mdtm', 'ftp_mkdir', 'ftp_nb_continue',
            'ftp_nb_fget', 'ftp_nb_fput', 'ftp_nb_get',
            'ftp_nb_put', 'ftp_nlist', 'ftp_pasv', 'ftp_put',
            'ftp_pwd', 'ftp_quit', 'ftp_rawlist', 'ftp_rename',
            'ftp_rmdir', 'ftp_set_option', 'ftp_site',
            'ftp_size', 'ftp_ssl_connect', 'ftp_systype',
            'ftruncate', 'function_exists', 'func_get_arg',
            'func_get_args', 'func_num_args', 'fwrite',
            'getallheaders', 'getcwd', 'getdate', 'getenv',
            'gethostbyaddr', 'gethostbyname', 'gethostbynamel',
            'getimagesize', 'getlastmod', 'getmxrr', 'getmygid',
            'getmyinode', 'getmypid', 'getmyuid', 'getopt',
            'getprotobyname', 'getprotobynumber', 'getrandmax',
            'getrusage', 'getservbyname', 'getservbyport',
            'gettext', 'gettimeofday', 'gettype', 'get_browser',
            'get_cfg_var', 'get_class', 'get_class_methods',
            'get_class_vars', 'get_current_user',
            'get_declared_classes', 'get_defined_constants',
            'get_defined_functions', 'get_defined_vars',
            'get_extension_funcs', 'get_html_translation_table',
            'get_included_files', 'get_include_path',
            'get_loaded_extensions', 'get_magic_quotes_gpc',
            'get_magic_quotes_runtime', 'get_meta_tags',
            'get_object_vars', 'get_parent_class',
            'get_required_files', 'get_resource_type', 'glob',
            'global', 'gmdate', 'gmmktime', 'gmstrftime',
            'gregoriantojd', 'gzclose', 'gzcompress',
            'gzdeflate', 'gzencode', 'gzeof', 'gzfile', 'gzgetc',
            'gzgets', 'gzgetss', 'gzinflate', 'gzopen',
            'gzpassthru', 'gzputs', 'gzread', 'gzrewind',
            'gzseek', 'gztell', 'gzuncompress', 'gzwrite',
            'header', 'headers_sent', 'hebrev', 'hebrevc',
            'hexdec', 'highlight_file', 'highlight_string',
            'htmlentities', 'htmlspecialchars',
            'html_entity_decode', 'hypot', 'i18n_convert',
            'i18n_discover_encoding', 'i18n_http_input',
            'i18n_http_output', 'i18n_internal_encoding',
            'i18n_ja_jp_hantozen', 'i18n_mime_header_decode',
            'i18n_mime_header_encode', 'iconv',
            'iconv_get_encoding', 'iconv_set_encoding',
            'ignore_user_abort', 'image_type_to_mime_type',
            'implode', 'import_request_variables', 'ini_alter',
            'ini_get', 'ini_get_all', 'ini_restore', 'ini_set',
            'intval', 'in_array', 'ip2long', 'iptcembed',
            'iptcparse', 'isset', 'is_a', 'is_array', 'is_bool',
            'is_callable', 'is_dir', 'is_double',
            'is_executable', 'is_file', 'is_finite', 'is_float',
            'is_infinite', 'is_int', 'is_integer', 'is_link',
            'is_long', 'is_nan', 'is_null', 'is_numeric',
            'is_object', 'is_readable', 'is_real', 'is_resource',
            'is_scalar', 'is_string', 'is_subclass_of',
            'is_uploaded_file', 'is_writable', 'is_writeable',
            'jddayofweek', 'jdmonthname', 'jdtofrench',
            'jdtogregorian', 'jdtojewish', 'jdtojulian',
            'jdtounix', 'jewishtojd', 'join', 'juliantojd',
            'key', 'key_exists', 'krsort', 'ksort', 'lcg_value',
            'levenshtein', 'link', 'linkinfo', 'list',
            'localeconv', 'localtime', 'log', 'log1p', 'log10',
            'long2ip', 'lstat', 'ltrim', 'magic_quotes_runtime',
            'mail', 'max', 'mbereg', 'mberegStrt',
            'mberegStrt_replace', 'mbereg_match', 'mbereg_replace',
            'mbereg_search', 'mbereg_search_getpos',
            'mbereg_search_getregs', 'mbereg_search_init',
            'mbereg_search_pos', 'mbereg_search_regs',
            'mbereg_search_setpos', 'mbregex_encoding',
            'mbsplit', 'mbstrcut', 'mbmb_strlen', 'mbstrpos',
            'mbstrrpos', 'mbsubstr', 'mb_convert_case',
            'mb_convert_encoding', 'mb_convert_kana',
            'mb_convert_variables', 'mb_decode_mimeheader',
            'mb_decode_numericentity', 'mb_detect_encoding',
            'mb_detect_order', 'mb_encode_mimeheader',
            'mb_encode_numericentity', 'mb_ereg', 'mb_eregStrt',
            'mb_eregStrt_replace', 'mb_ereg_match',
            'mb_ereg_replace', 'mb_ereg_search',
            'mb_ereg_search_getpos', 'mb_ereg_search_getregs',
            'mb_ereg_search_init', 'mb_ereg_search_pos',
            'mb_ereg_search_regs', 'mb_ereg_search_setpos',
            'mb_get_info', 'mb_http_input', 'mb_http_output',
            'mb_internal_encoding', 'mb_language',
            'mb_output_handler', 'mb_parse_str',
            'mb_preferred_mime_name', 'mb_regex_encoding',
            'mb_regex_set_options', 'mb_send_mail', 'mb_split',
            'mb_strcut', 'mb_strimwidth', 'mb_mb_strlen',
            'mb_strpos', 'mb_strrpos', 'mb_strtolower',
            'mb_strtoupper', 'mb_strwidth',
            'mb_substitute_character', 'mb_substr',
            'mb_substr_count', 'md5', 'md5_file',
            'memory_get_usage', 'metaphone', 'method_exists',
            'microtime', 'min', 'mkdir', 'mktime',
            'money_format', 'move_uploaded_file',
            'mt_getrandmax', 'mt_rand', 'mt_srand', 'mysql',
            'mysql_affected_rows', 'mysql_client_encoding',
            'mysql_close', 'mysql_connect', 'mysql_createdb',
            'mysql_create_db', 'mysql_data_seek', 'mysql_dbname',
            'mysql_db_name', 'mysql_db_query', 'mysql_dropdb',
            'mysql_drop_db', 'mysql_errno', 'mysql_error',
            'mysql_escape_string_string', 'mysql_fetch_array',
            'mysql_fetch_assoc', 'mysql_fetch_field',
            'mysql_fetch_lengths', 'mysql_fetch_object',
            'mysql_fetch_row', 'mysql_fieldflags',
            'mysql_fieldlen', 'mysql_fieldname',
            'mysql_fieldtable', 'mysql_fieldtype',
            'mysql_field_flags', 'mysql_field_len',
            'mysql_field_name', 'mysql_field_seek',
            'mysql_field_table', 'mysql_field_type',
            'mysql_freeresult', 'mysql_free_result',
            'mysql_get_client_info', 'mysql_get_host_info',
            'mysql_get_proto_info', 'mysql_get_server_info',
            'mysql_info', 'mysql_insert_id', 'mysql_listdbs',
            'mysql_listfields', 'mysql_listtables',
            'mysql_list_dbs', 'mysql_list_fields',
            'mysql_list_processes', 'mysql_list_tables',
            'mysql_numfields', 'mysql_numrows',
            'mysql_num_fields', 'mysql_num_rows',
            'mysql_pconnect', 'mysql_ping', 'mysql_query',
            'escape', 'mysql_result',
            'mysql_selectdb', 'mysql_select_db', 'mysql_stat',
            'mysql_tablename', 'mysql_table_name',
            'mysql_thread_id', 'mysql_unbuffered_query',
            'natcasesort', 'natsort', 'next', 'ngettext',
            'nl2br', 'nl_langinfo', 'number_format', 'ob_clean',
            'ob_end_clean', 'ob_end_flush', 'ob_flush',
            'ob_get_clean', 'ob_get_contents', 'ob_get_flush',
            'ob_get_length', 'ob_get_level', 'ob_get_status',
            'ob_gzhandler', 'ob_iconv_handler',
            'ob_implicit_flush', 'ob_list_handlers', 'ob_start',
            'octdec', 'opendir', 'openlog', 'openssl_csr_export',
            'openssl_csr_export_to_file', 'openssl_csr_new',
            'openssl_csr_sign', 'openssl_error_string',
            'openssl_free_key', 'openssl_get_privatekey',
            'openssl_get_publickey', 'openssl_open',
            'openssl_pkcs7_decrypt', 'openssl_pkcs7_encrypt',
            'openssl_pkcs7_sign', 'openssl_pkcs7_verify',
            'openssl_pkey_export', 'openssl_pkey_export_to_file',
            'openssl_pkey_free', 'openssl_pkey_get_private',
            'openssl_pkey_get_public', 'openssl_pkey_new',
            'openssl_private_decrypt', 'openssl_private_encrypt',
            'openssl_public_decrypt', 'openssl_public_encrypt',
            'openssl_seal', 'openssl_sign', 'openssl_verify',
            'openssl_x509_checkpurpose',
            'openssl_x509_check_private_key',
            'openssl_x509_export', 'openssl_x509_export_to_file',
            'openssl_x509_free', 'openssl_x509_parse',
            'openssl_x509_read', 'ord', 'output_add_rewrite_var',
            'output_reset_rewrite_vars', 'overload', 'pack',
            'parse_ini_file', 'parse_str', 'parse_url',
            'passthru', 'pathinfo', 'pclose', 'pfsockopen',
            'pg_affected_rows', 'pg_cancel_query',
            'pg_clientencoding', 'pg_client_encoding',
            'pg_close', 'pg_cmdtuples', 'pg_connect',
            'pg_connection_busy', 'pg_connection_reset',
            'pg_connection_status', 'pg_convert', 'pg_copy_from',
            'pg_copy_to', 'pg_dbname', 'pg_delete',
            'pg_end_copy', 'pg_errormessage', 'pg_escape_bytea',
            'pg_escape_string', 'pg_exec', 'pg_fetch_all',
            'pg_fetch_array', 'pg_fetch_assoc',
            'pg_fetch_object', 'pg_fetch_result', 'pg_fetch_row',
            'pg_fieldisnull', 'pg_fieldname', 'pg_fieldnum',
            'pg_fieldprtlen', 'pg_fieldsize', 'pg_fieldtype',
            'pg_field_is_null', 'pg_field_name', 'pg_field_num',
            'pg_field_prtlen', 'pg_field_size', 'pg_field_type',
            'pg_freeresult', 'pg_free_result', 'pg_getlastoid',
            'pg_get_notify', 'pg_get_pid', 'pg_get_result',
            'pg_host', 'pg_insert', 'pg_last_error',
            'pg_last_notice', 'pg_last_oid', 'pg_loclose',
            'pg_locreate', 'pg_loexport', 'pg_loimport',
            'pg_loopen', 'pg_loread', 'pg_loreadall',
            'pg_lounlink', 'pg_lowrite', 'pg_lo_close',
            'pg_lo_create', 'pg_lo_export', 'pg_lo_import',
            'pg_lo_open', 'pg_lo_read', 'pg_lo_read_all',
            'pg_lo_seek', 'pg_lo_tell', 'pg_lo_unlink',
            'pg_lo_write', 'pg_meta_data', 'pg_numfields',
            'pg_numrows', 'pg_num_fields', 'pg_num_rows',
            'pg_options', 'pg_pconnect', 'pg_ping', 'pg_port',
            'pg_put_line', 'pg_query', 'pg_result',
            'pg_result_error', 'pg_result_seek',
            'pg_result_status', 'pg_select', 'pg_send_query',
            'pg_setclientencoding', 'pg_set_client_encoding',
            'pg_trace', 'pg_tty', 'pg_unescape_bytea',
            'pg_untrace', 'pg_update', 'phpcredits', 'phpinfo',
            'phpversion', 'php_ini_scanned_files',
            'php_logo_guid', 'php_sapi_name', 'php_uname', 'pi',
            'popen', 'pos', 'posix_ctermid', 'posix_errno',
            'posix_getcwd', 'posix_getegid', 'posix_geteuid',
            'posix_getgid', 'posix_getgrgid', 'posix_getgrnam',
            'posix_getgroups', 'posix_getlogin', 'posix_getpgid',
            'posix_getpgrp', 'posix_getpid', 'posix_getppid',
            'posix_getpwnam', 'posix_getpwuid',
            'posix_getrlimit', 'posix_getsid', 'posix_getuid',
            'posix_get_last_error', 'posix_isatty', 'posix_kill',
            'posix_mkfifo', 'posix_setegid', 'posix_seteuid',
            'posix_setgid', 'posix_setpgid', 'posix_setsid',
            'posix_setuid', 'posix_strerror', 'posix_times',
            'posix_ttyname', 'posix_uname', 'pow', 'preg_grep',
            'preg_match', 'preg_match_all', 'preg_quote',
            'preg_replace', 'preg_replace_callback',
            'preg_split', 'prev', 'print', 'printf', 'print_r',
            'proc_close', 'proc_open', 'putenv',
            'quoted_printable_decode', 'quotemeta', 'rad2deg',
            'rand', 'range', 'rawurldecode', 'rawurlencode',
            'readdir', 'readfile', 'readgzfile', 'readlink',
            'read_exif_data', 'realpath',
            'register_shutdown_function',
            'register_tick_function', 'rename', 'reset',
            'restore_error_handler', 'restore_include_path',
            'rewind', 'rewinddir', 'rmdir', 'round', 'rsort',
            'rtrim', 'sem_acquire', 'sem_get', 'sem_release',
            'sem_remove', 'serialize', 'session_cache_expire',
            'session_cache_limiter', 'session_decode',
            'session_destroy', 'session_encode',
            'session_get_cookie_params', 'session_id',
            'session_is_registered', 'session_module_name',
            'session_name', 'session_regenerate_id',
            'session_register', 'session_save_path',
            'session_set_cookie_params',
            'session_set_save_handler', 'session_start',
            'session_unregister', 'session_unset',
            'session_write_close', 'setcookie', 'setlocale',
            'settype', 'set_error_handler', 'set_file_buffer',
            'set_include_path', 'set_magic_quotes_runtime',
            'set_socket_blocking', 'set_time_limit', 'sha1',
            'sha1_file', 'shell_exec', 'shmop_close',
            'shmop_delete', 'shmop_open', 'shmop_read',
            'shmop_size', 'shmop_write', 'shm_attach',
            'shm_detach', 'shm_get_var', 'shm_put_var',
            'shm_remove', 'shm_remove_var', 'show_source',
            'shuffle', 'similar_text', 'sin', 'sinh', 'sizeof',
            'sleep', 'socket_accept', 'socket_bind',
            'socket_clear_error', 'socket_close',
            'socket_connect', 'socket_create',
            'socket_create_listen', 'socket_create_pair',
            'socket_getopt', 'socket_getpeername',
            'socket_getsockname', 'socket_get_option',
            'socket_get_status', 'socket_iovec_add',
            'socket_iovec_alloc', 'socket_iovec_delete',
            'socket_iovec_fetch', 'socket_iovec_free',
            'socket_iovec_set', 'socket_last_error',
            'socket_listen', 'socket_read', 'socket_readv',
            'socket_recv', 'socket_recvfrom', 'socket_recvmsg',
            'socket_select', 'socket_send', 'socket_sendmsg',
            'socket_sendto', 'socket_setopt', 'socket_set_block',
            'socket_set_blocking', 'socket_set_nonblock',
            'socket_set_option', 'socket_set_timeout',
            'socket_shutdown', 'socket_strerror', 'socket_write',
            'socket_writev', 'sort', 'soundex', 'split',
            'spliti', 'sprintf', 'sql_regcase', 'sqrt', 'srand',
            'sscanf', 'stat', 'static', 'strcasecmp', 'strchr',
            'strcmp', 'strcoll', 'strcspn',
            'stream_context_create',
            'stream_context_get_options',
            'stream_context_set_option',
            'stream_context_set_params', 'stream_filter_append',
            'stream_filter_prepend', 'stream_get_meta_data',
            'stream_register_wrapper', 'stream_select',
            'stream_set_blocking', 'stream_set_timeout',
            'stream_set_write_buffer', 'stream_wrapper_register',
            'strftime', 'stripcslashes', 'stripslashes',
            'strip_tags', 'stristr', 'mb_strlen', 'strnatcasecmp',
            'strnatcmp', 'strncasecmp', 'strncmp', 'strpos',
            'strrchr', 'strrev', 'strrpos', 'strspn', 'strstr',
            'strtok', 'mb_strtolower', 'strtotime', 'strtoupper',
            'strtr', 'strval', 'str_pad', 'str_repeat',
            'str_replace', 'str_rot13', 'str_shuffle',
            'str_word_count', 'mb_substr', 'substr_count',
            'substr_replace', 'symlink', 'syslog', 'system',
            'tan', 'tanh', 'tempnam', 'textdomain', 'time',
            'tmpfile', 'token_get_all', 'token_name', 'touch',
            'trigger_error', 'trim', 'uasort', 'ucfirst',
            'ucwords', 'uksort', 'umask', 'uniqid', 'unixtojd',
            'unlink', 'unpack', 'unregister_tick_function',
            'unserialize', 'unset', 'urldecode', 'urlencode',
            'user_error', 'usleep', 'usort', 'utf8_decode',
            'utf8_encode', 'var_dump', 'var_export',
            'version_compare', 'virtual', 'vprintf', 'vsprintf',
            'wddx_add_vars', 'wddx_deserialize',
            'wddx_packet_end', 'wddx_packet_start',
            'wddx_serialize_value', 'wddx_serialize_vars',
            'wordwrap', 'xml_error_string',
            'xml_get_current_byte_index',
            'xml_get_current_column_number',
            'xml_get_current_line_number', 'xml_get_error_code',
            'xml_parse', 'xml_parser_create',
            'xml_parser_create_ns', 'xml_parser_free',
            'xml_parser_get_option', 'xml_parser_set_option',
            'xml_parse_into_struct',
            'xml_set_character_data_handler',
            'xml_set_default_handler', 'xml_set_element_handler',
            'xml_set_end_namespace_decl_handler',
            'xml_set_external_entity_ref_handler',
            'xml_set_notation_decl_handler', 'xml_set_object',
            'xml_set_processing_instruction_handler',
            'xml_set_start_namespace_decl_handler',
            'xml_set_unparsed_entity_decl_handler', 'yp_all',
            'yp_cat', 'yp_errno', 'yp_err_string', 'yp_first',
            'yp_get_default_domain', 'yp_master', 'yp_match',
            'yp_next', 'yp_order', 'zend_logo_guid',
            'zend_version', 'zlib_get_coding_type', '_'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}',
        '!', '@', '%', '&', '|', '/',
        '<', '>',
        '=', '-', '+', '*',
        '.', ':', ',', ';'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #990000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #666666; font-style: italic;',
            3 => 'color: #0000cc; font-style: italic;',
            4 => 'color: #009933; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #006699; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold; font-style: italic;',
            6 => 'color: #009933; font-weight: bold;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;',
            'HARD' => 'color: #0000ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            ),
        'METHODS' => array(
            1 => 'color: #004000;',
            2 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            0 => 'color: #000088;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => '',
            4 => '',
            5 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.php.net/{FNAMEL}'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '-&gt;',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Variables
        0 => "[\\$]{1,2}[a-zA-Z_][a-zA-Z0-9_]*"
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<?php' => '?>'
            ),
        1 => array(
            '<?' => '?>'
            ),
        2 => array(
            '<%' => '%>'
            ),
        3 => array(
            '<script language="php">' => '</script>'
            ),
        4 => "/(<\?(?:php)?)(?:'(?:[^'\\\\]|\\\\.)*?'|\"(?:[^\"\\\\]|\\\\.)*?\"|\/\*(?!\*\/).*?\*\/|.)*?(\?>|\Z)/sm",
        5 => "/(<%)(?:'(?:[^'\\\\]|\\\\.)*?'|\"(?:[^\"\\\\]|\\\\.)*?\"|\/\*(?!\*\/).*?\*\/|.)*?(%>|\Z)/sm"
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true
        ),
    'TAB_WIDTH' => 4
);

?>
