<?php

namespace App\Helpers;

/*
  +---------------------------------------------------+
  |Class for interacting with Php curl				|
  |													|
  |													|
  |													|
  |													|
  |													|
  |													|
  |													|
  +---------------------------------------------------+
 * *** */

class Curl {

    protected $curlOptionsArray;
    protected $error;
    protected $maxParallelConnections;

    public function execute($curlOptions = array()) {
        try {
            //echo "\nCurl options : <pre>" . print_r($curlOptions, true) . '</pre>';
            $diffArray = array_diff(array_keys(array_change_key_case($curlOptions, CASE_UPPER)), 
                    $this->curlOptionsArray);

            if (count($diffArray)) {
                $this->error = 'Invalid curl options : ' . implode(',', $diffArray);
                return false;
            }

            $ch = curl_init();

            foreach ($curlOptions as $option => $value) {
                curl_setopt($ch, $option, $value);
            }

            ini_set('memory_limit', '-1');

            $curlResult = curl_exec($ch);

            // If $ch is successful
            if ($curlResult) {
                curl_close($ch);
                return $curlResult;
            }

            $this->error = curl_error($ch);
            
            /*$this->error = '<br><b>Curl Error : </b>' . curl_error($ch) 
                            . '<br><b>Curl Result : </b>'
                            . $curlResult . '<br>'
                            . '<b>Curl Options : </b>'
                            . '<pre>' . print_r($curlOptions, true) . '</pre>';*/
            
            curl_close($ch);
            
            return false;
            
        } catch (\Exception $ex) {
            $this->error = 'Curl Error. Please contact administrator';
            if (env('APP_DEBUG'))
            {
                $this->error = 'Unable to execute curl due to this error : ' . $ex->getMessage() 
                        . ', Please contact administrator.';
            }
            return false;
        }
    }

    public function getError() {
        return $this->error;
    }

    public function __construct() {
        $this->error = null;
        
        //$this->maxParallelConnections = 10;
        
        $this->maxParallelConnections = 5;

        $this->curlOptionsArray = array
            (
            defined('CURLOPT_AUTOREFERER') ? CURLOPT_AUTOREFERER : null,
            defined('CURLOPT_COOKIESESSION') ? CURLOPT_COOKIESESSION : null,
            defined('CURLOPT_DNS_USE_GLOBAL_CACHE') ? CURLOPT_DNS_USE_GLOBAL_CACHE : null,
            defined('CURLOPT_DNS_CACHE_TIMEOUT') ? CURLOPT_DNS_CACHE_TIMEOUT : null,
            defined('CURLOPT_FTP_SSL') ? CURLOPT_FTP_SSL : null,
            defined('CURLFTP_CREATE_DIR') ? CURLFTP_CREATE_DIR : null,
            defined('CURLFTP_CREATE_DIR_NONE') ? CURLFTP_CREATE_DIR_NONE : null,
            defined('CURLFTP_CREATE_DIR_RETRY') ? CURLFTP_CREATE_DIR_RETRY : null,
            defined('CURLFTPSSL_TRY') ? CURLFTPSSL_TRY : null,
            defined('CURLFTPSSL_ALL') ? CURLFTPSSL_ALL : null,
            defined('CURLFTPSSL_CONTROL') ? CURLFTPSSL_CONTROL : null,
            defined('CURLFTPSSL_NONE') ? CURLFTPSSL_NONE : null,
            defined('CURLOPT_PRIVATE') ? CURLOPT_PRIVATE : null,
            defined('CURLOPT_FTPSSLAUTH') ? CURLOPT_FTPSSLAUTH : null,
            defined('CURLOPT_PORT') ? CURLOPT_PORT : null,
            defined('CURLOPT_FILE') ? CURLOPT_FILE : null,
            defined('CURLOPT_INFILE') ? CURLOPT_INFILE : null,
            defined('CURLOPT_INFILESIZE') ? CURLOPT_INFILESIZE : null,
            defined('CURLOPT_URL') ? CURLOPT_URL : null,
            defined('CURLOPT_PROXY') ? CURLOPT_PROXY : null,
            defined('CURLOPT_VERBOSE') ? CURLOPT_VERBOSE : null,
            defined('CURLOPT_HEADER') ? CURLOPT_HEADER : null,
            defined('CURLOPT_HTTPHEADER') ? CURLOPT_HTTPHEADER : null,
            defined('CURLOPT_NOPROGRESS') ? CURLOPT_NOPROGRESS : null,
            defined('CURLOPT_NOBODY') ? CURLOPT_NOBODY : null,
            defined('CURLOPT_FAILONERROR') ? CURLOPT_FAILONERROR : null,
            defined('CURLOPT_UPLOAD') ? CURLOPT_UPLOAD : null,
            defined('CURLOPT_POST') ? CURLOPT_POST : null,
            defined('CURLOPT_FTPLISTONLY') ? CURLOPT_FTPLISTONLY : null,
            defined('CURLOPT_FTPAPPEND') ? CURLOPT_FTPAPPEND : null,
            defined('CURLOPT_FTP_CREATE_MISSING_DIRS') ? CURLOPT_FTP_CREATE_MISSING_DIRS : null,
            defined('CURLOPT_NETRC') ? CURLOPT_NETRC : null,
            defined('CURLOPT_FOLLOWLOCATION') ? CURLOPT_FOLLOWLOCATION : null,
            defined('CURLOPT_FTPASCII') ? CURLOPT_FTPASCII : null,
            defined('CURLOPT_PUT') ? CURLOPT_PUT : null,
            defined('CURLOPT_MUTE') ? CURLOPT_MUTE : null,
            defined('CURLOPT_USERPWD') ? CURLOPT_USERPWD : null,
            defined('CURLOPT_PROXYUSERPWD') ? CURLOPT_PROXYUSERPWD : null,
            defined('CURLOPT_RANGE') ? CURLOPT_RANGE : null,
            defined('CURLOPT_TIMEOUT') ? CURLOPT_TIMEOUT : null,
            defined('CURLOPT_TIMEOUT_MS') ? CURLOPT_TIMEOUT_MS : null,
            defined('CURLOPT_TCP_NODELAY') ? CURLOPT_TCP_NODELAY : null,
            defined('CURLOPT_POSTFIELDS') ? CURLOPT_POSTFIELDS : null,
            defined('CURLOPT_PROGRESSFUNCTION') ? CURLOPT_PROGRESSFUNCTION : null,
            defined('CURLOPT_REFERER') ? CURLOPT_REFERER : null,
            defined('CURLOPT_USERAGENT') ? CURLOPT_USERAGENT : null,
            defined('CURLOPT_FTPPORT') ? CURLOPT_FTPPORT : null,
            defined('CURLOPT_FTP_USE_EPSV') ? CURLOPT_FTP_USE_EPSV : null,
            defined('CURLOPT_LOW_SPEED_LIMIT') ? CURLOPT_LOW_SPEED_LIMIT : null,
            defined('CURLOPT_LOW_SPEED_TIME') ? CURLOPT_LOW_SPEED_TIME : null,
            defined('CURLOPT_RESUME_FROM') ? CURLOPT_RESUME_FROM : null,
            defined('CURLOPT_COOKIE') ? CURLOPT_COOKIE : null,
            defined('CURLOPT_SSLCERT') ? CURLOPT_SSLCERT : null,
            defined('CURLOPT_SSLCERTPASSWD') ? CURLOPT_SSLCERTPASSWD : null,
            defined('CURLOPT_WRITEHEADER') ? CURLOPT_WRITEHEADER : null,
            defined('CURLOPT_SSL_VERIFYHOST') ? CURLOPT_SSL_VERIFYHOST : null,
            defined('CURLOPT_COOKIEFILE') ? CURLOPT_COOKIEFILE : null,
            defined('CURLOPT_SSLVERSION') ? CURLOPT_SSLVERSION : null,
            defined('CURL_SSLVERSION_DEFAULT') ? CURL_SSLVERSION_DEFAULT : null,
            defined('CURL_SSLVERSION_TLSv1') ? CURL_SSLVERSION_TLSv1 : null,
            defined('CURL_SSLVERSION_SSLv2') ? CURL_SSLVERSION_SSLv2 : null,
            defined('CURL_SSLVERSION_SSLv3') ? CURL_SSLVERSION_SSLv3 : null,
            defined('CURL_SSLVERSION_TLSv1_0') ? CURL_SSLVERSION_TLSv1_0 : null,
            defined('CURL_SSLVERSION_TLSv1_1') ? CURL_SSLVERSION_TLSv1_1 : null,
            defined('CURL_SSLVERSION_TLSv1_2') ? CURL_SSLVERSION_TLSv1_2 : null,
            defined('CURLOPT_TIMECONDITION') ? CURLOPT_TIMECONDITION : null,
            defined('CURLOPT_TIMEVALUE') ? CURLOPT_TIMEVALUE : null,
            defined('CURLOPT_CUSTOMREQUEST') ? CURLOPT_CUSTOMREQUEST : null,
            defined('CURLOPT_STDERR') ? CURLOPT_STDERR : null,
            defined('CURLOPT_TRANSFERTEXT') ? CURLOPT_TRANSFERTEXT : null,
            defined('CURLOPT_RETURNTRANSFER') ? CURLOPT_RETURNTRANSFER : null,
            defined('CURLOPT_QUOTE') ? CURLOPT_QUOTE : null,
            defined('CURLOPT_POSTQUOTE') ? CURLOPT_POSTQUOTE : null,
            defined('CURLOPT_INTERFACE') ? CURLOPT_INTERFACE : null,
            defined('CURLOPT_KRB4LEVEL') ? CURLOPT_KRB4LEVEL : null,
            defined('CURLOPT_HTTPPROXYTUNNEL') ? CURLOPT_HTTPPROXYTUNNEL : null,
            defined('CURLOPT_FILETIME') ? CURLOPT_FILETIME : null,
            defined('CURLOPT_WRITEFUNCTION') ? CURLOPT_WRITEFUNCTION : null,
            defined('CURLOPT_READFUNCTION') ? CURLOPT_READFUNCTION : null,
            defined('CURLOPT_PASSWDFUNCTION') ? CURLOPT_PASSWDFUNCTION : null,
            defined('CURLOPT_HEADERFUNCTION') ? CURLOPT_HEADERFUNCTION : null,
            defined('CURLOPT_MAXREDIRS') ? CURLOPT_MAXREDIRS : null,
            defined('CURLOPT_MAXCONNECTS') ? CURLOPT_MAXCONNECTS : null,
            defined('CURLOPT_CLOSEPOLICY') ? CURLOPT_CLOSEPOLICY : null,
            defined('CURLOPT_FRESH_CONNECT') ? CURLOPT_FRESH_CONNECT : null,
            defined('CURLOPT_FORBID_REUSE') ? CURLOPT_FORBID_REUSE : null,
            defined('CURLOPT_RANDOM_FILE') ? CURLOPT_RANDOM_FILE : null,
            defined('CURLOPT_EGDSOCKET') ? CURLOPT_EGDSOCKET : null,
            defined('CURLOPT_CONNECTTIMEOUT') ? CURLOPT_CONNECTTIMEOUT : null,
            defined('CURLOPT_CONNECTTIMEOUT_MS') ? CURLOPT_CONNECTTIMEOUT_MS : null,
            defined('CURLOPT_SSL_VERIFYPEER') ? CURLOPT_SSL_VERIFYPEER : null,
            defined('CURLOPT_CAINFO') ? CURLOPT_CAINFO : null,
            defined('CURLOPT_CAPATH') ? CURLOPT_CAPATH : null,
            defined('CURLOPT_COOKIEJAR') ? CURLOPT_COOKIEJAR : null,
            defined('CURLOPT_SSL_CIPHER_LIST') ? CURLOPT_SSL_CIPHER_LIST : null,
            defined('CURLOPT_BINARYTRANSFER') ? CURLOPT_BINARYTRANSFER : null,
            defined('CURLOPT_NOSIGNAL') ? CURLOPT_NOSIGNAL : null,
            defined('CURLOPT_PROXYTYPE') ? CURLOPT_PROXYTYPE : null,
            defined('CURLOPT_BUFFERSIZE') ? CURLOPT_BUFFERSIZE : null,
            defined('CURLOPT_HTTPGET') ? CURLOPT_HTTPGET : null,
            defined('CURLOPT_HTTP_VERSION') ? CURLOPT_HTTP_VERSION : null,
            defined('CURLOPT_SSLKEY') ? CURLOPT_SSLKEY : null,
            defined('CURLOPT_SSLKEYTYPE') ? CURLOPT_SSLKEYTYPE : null,
            defined('CURLOPT_SSLKEYPASSWD') ? CURLOPT_SSLKEYPASSWD : null,
            defined('CURLOPT_SSLENGINE') ? CURLOPT_SSLENGINE : null,
            defined('CURLOPT_SSLENGINE_DEFAULT') ? CURLOPT_SSLENGINE_DEFAULT : null,
            defined('CURLOPT_SSLCERTTYPE') ? CURLOPT_SSLCERTTYPE : null,
            defined('CURLOPT_CRLF') ? CURLOPT_CRLF : null,
            defined('CURLOPT_ENCODING') ? CURLOPT_ENCODING : null,
            defined('CURLOPT_PROXYPORT') ? CURLOPT_PROXYPORT : null,
            defined('CURLOPT_UNRESTRICTED_AUTH') ? CURLOPT_UNRESTRICTED_AUTH : null,
            defined('CURLOPT_FTP_USE_EPRT') ? CURLOPT_FTP_USE_EPRT : null,
            defined('CURLOPT_HTTP200ALIASES') ? CURLOPT_HTTP200ALIASES : null,
            defined('CURLOPT_HTTPAUTH') ? CURLOPT_HTTPAUTH : null,
            defined('CURLAUTH_BASIC') ? CURLAUTH_BASIC : null,
            defined('CURLAUTH_DIGEST') ? CURLAUTH_DIGEST : null,
            defined('CURLAUTH_GSSNEGOTIATE') ? CURLAUTH_GSSNEGOTIATE : null,
            defined('CURLAUTH_NEGOTIATE') ? CURLAUTH_NEGOTIATE : null,
            defined('CURLAUTH_NTLM') ? CURLAUTH_NTLM : null,
            defined('CURLAUTH_NTLM_WB') ? CURLAUTH_NTLM_WB : null,
            defined('CURLAUTH_ANY') ? CURLAUTH_ANY : null,
            defined('CURLAUTH_ANYSAFE') ? CURLAUTH_ANYSAFE : null,
            defined('CURLOPT_PROXYAUTH') ? CURLOPT_PROXYAUTH : null,
            defined('CURLOPT_MAX_RECV_SPEED_LARGE') ? CURLOPT_MAX_RECV_SPEED_LARGE : null,
            defined('CURLOPT_MAX_SEND_SPEED_LARGE') ? CURLOPT_MAX_SEND_SPEED_LARGE : null,
            defined('CURLOPT_HEADEROPT') ? CURLOPT_HEADEROPT : null,
            defined('CURLOPT_PROXYHEADER') ? CURLOPT_PROXYHEADER : null,
            defined('CURLCLOSEPOLICY_LEAST_RECENTLY_USED') ? CURLCLOSEPOLICY_LEAST_RECENTLY_USED : null,
            defined('CURLCLOSEPOLICY_LEAST_TRAFFIC') ? CURLCLOSEPOLICY_LEAST_TRAFFIC : null,
            defined('CURLCLOSEPOLICY_SLOWEST') ? CURLCLOSEPOLICY_SLOWEST : null,
            defined('CURLCLOSEPOLICY_CALLBACK') ? CURLCLOSEPOLICY_CALLBACK : null,
            defined('CURLCLOSEPOLICY_OLDEST') ? CURLCLOSEPOLICY_OLDEST : null,
            defined('CURLINFO_PRIVATE') ? CURLINFO_PRIVATE : null,
            defined('CURLINFO_EFFECTIVE_URL') ? CURLINFO_EFFECTIVE_URL : null,
            defined('CURLINFO_HTTP_CODE') ? CURLINFO_HTTP_CODE : null,
            defined('CURLINFO_HEADER_OUT') ? CURLINFO_HEADER_OUT : null,
            defined('CURLINFO_HEADER_SIZE') ? CURLINFO_HEADER_SIZE : null,
            defined('CURLINFO_REQUEST_SIZE') ? CURLINFO_REQUEST_SIZE : null,
            defined('CURLINFO_TOTAL_TIME') ? CURLINFO_TOTAL_TIME : null,
            defined('CURLINFO_NAMELOOKUP_TIME') ? CURLINFO_NAMELOOKUP_TIME : null,
            defined('CURLINFO_CONNECT_TIME') ? CURLINFO_CONNECT_TIME : null,
            defined('CURLINFO_PRETRANSFER_TIME') ? CURLINFO_PRETRANSFER_TIME : null,
            defined('CURLINFO_SIZE_UPLOAD') ? CURLINFO_SIZE_UPLOAD : null,
            defined('CURLINFO_SIZE_DOWNLOAD') ? CURLINFO_SIZE_DOWNLOAD : null,
            defined('CURLINFO_SPEED_DOWNLOAD') ? CURLINFO_SPEED_DOWNLOAD : null,
            defined('CURLINFO_SPEED_UPLOAD') ? CURLINFO_SPEED_UPLOAD : null,
            defined('CURLINFO_FILETIME') ? CURLINFO_FILETIME : null,
            defined('CURLINFO_SSL_VERIFYRESULT') ? CURLINFO_SSL_VERIFYRESULT : null,
            defined('CURLINFO_CONTENT_LENGTH_DOWNLOAD') ? CURLINFO_CONTENT_LENGTH_DOWNLOAD : null,
            defined('CURLINFO_CONTENT_LENGTH_UPLOAD') ? CURLINFO_CONTENT_LENGTH_UPLOAD : null,
            defined('CURLINFO_STARTTRANSFER_TIME') ? CURLINFO_STARTTRANSFER_TIME : null,
            defined('CURLINFO_CONTENT_TYPE') ? CURLINFO_CONTENT_TYPE : null,
            defined('CURLINFO_REDIRECT_TIME') ? CURLINFO_REDIRECT_TIME : null,
            defined('CURLINFO_REDIRECT_COUNT') ? CURLINFO_REDIRECT_COUNT : null,
            defined('CURLINFO_REDIRECT_URL ') ? CURLINFO_REDIRECT_URL : null,
            defined('CURLINFO_PRIMARY_IP ') ? CURLINFO_PRIMARY_IP : null,
            defined('CURLINFO_PRIMARY_PORT') ? CURLINFO_PRIMARY_PORT : null,
            defined('CURLINFO_LOCAL_IP ') ? CURLINFO_LOCAL_IP : null,
            defined('CURLINFO_LOCAL_PORT') ? CURLINFO_LOCAL_PORT : null,
            defined('CURL_PUSH_OK') ? CURL_PUSH_OK : null,
            defined('CURL_PUSH_DENY') ? CURL_PUSH_DENY : null,
            defined('CURL_REDIR_POST_301') ? CURL_REDIR_POST_301 : null,
            defined('CURL_REDIR_POST_302') ? CURL_REDIR_POST_302 : null,
            defined('CURL_REDIR_POST_303') ? CURL_REDIR_POST_303 : null,
            defined('CURL_REDIR_POST_ALL') ? CURL_REDIR_POST_ALL : null,
            defined('CURL_TIMECOND_IFMODSINCE') ? CURL_TIMECOND_IFMODSINCE : null,
            defined('CURL_TIMECOND_IFUNMODSINCE') ? CURL_TIMECOND_IFUNMODSINCE : null,
            defined('CURL_TIMECOND_LASTMOD') ? CURL_TIMECOND_LASTMOD : null,
            defined('CURL_VERSION_IPV6') ? CURL_VERSION_IPV6 : null,
            defined('CURL_VERSION_KERBEROS4') ? CURL_VERSION_KERBEROS4 : null,
            defined('CURL_VERSION_KERBEROS5') ? CURL_VERSION_KERBEROS5 : null,
            defined('CURL_VERSION_HTTP2') ? CURL_VERSION_HTTP2 : null,
            defined('CURL_VERSION_PSL') ? CURL_VERSION_PSL : null,
            defined('CURL_VERSION_SSL') ? CURL_VERSION_SSL : null,
            defined('CURL_VERSION_UNIX_SOCKETS') ? CURL_VERSION_UNIX_SOCKETS : null,
            defined('CURL_VERSION_LIBZ') ? CURL_VERSION_LIBZ : null,
            defined('CURLVERSION_NOW') ? CURLVERSION_NOW : null,
            defined('CURLE_OK') ? CURLE_OK : null,
            defined('CURLE_UNSUPPORTED_PROTOCOL') ? CURLE_UNSUPPORTED_PROTOCOL : null,
            defined('CURLE_FAILED_INIT') ? CURLE_FAILED_INIT : null,
            defined('CURLE_URL_MALFORMAT') ? CURLE_URL_MALFORMAT : null,
            defined('CURLE_URL_MALFORMAT_USER') ? CURLE_URL_MALFORMAT_USER : null,
            defined('CURLE_COULDNT_RESOLVE_PROXY') ? CURLE_COULDNT_RESOLVE_PROXY : null,
            defined('CURLE_COULDNT_RESOLVE_HOST') ? CURLE_COULDNT_RESOLVE_HOST : null,
            defined('CURLE_COULDNT_CONNECT') ? CURLE_COULDNT_CONNECT : null,
            defined('CURLE_FTP_WEIRD_SERVER_REPLY') ? CURLE_FTP_WEIRD_SERVER_REPLY : null,
            defined('CURLE_FTP_ACCESS_DENIED') ? CURLE_FTP_ACCESS_DENIED : null,
            defined('CURLE_FTP_USER_PASSWORD_INCORRECT') ? CURLE_FTP_USER_PASSWORD_INCORRECT : null,
            defined('CURLE_FTP_WEIRD_PASS_REPLY') ? CURLE_FTP_WEIRD_PASS_REPLY : null,
            defined('CURLE_FTP_WEIRD_USER_REPLY') ? CURLE_FTP_WEIRD_USER_REPLY : null,
            defined('CURLE_FTP_WEIRD_PASV_REPLY') ? CURLE_FTP_WEIRD_PASV_REPLY : null,
            defined('CURLE_FTP_WEIRD_227_FORMAT') ? CURLE_FTP_WEIRD_227_FORMAT : null,
            defined('CURLE_FTP_CANT_GET_HOST') ? CURLE_FTP_CANT_GET_HOST : null,
            defined('CURLE_FTP_CANT_RECONNECT') ? CURLE_FTP_CANT_RECONNECT : null,
            defined('CURLE_FTP_COULDNT_SET_BINARY') ? CURLE_FTP_COULDNT_SET_BINARY : null,
            defined('CURLE_PARTIAL_FILE') ? CURLE_PARTIAL_FILE : null,
            defined('CURLE_FTP_COULDNT_RETR_FILE') ? CURLE_FTP_COULDNT_RETR_FILE : null,
            defined('CURLE_FTP_WRITE_ERROR') ? CURLE_FTP_WRITE_ERROR : null,
            defined('CURLE_FTP_QUOTE_ERROR') ? CURLE_FTP_QUOTE_ERROR : null,
            defined('CURLE_HTTP_NOT_FOUND') ? CURLE_HTTP_NOT_FOUND : null,
            defined('CURLE_WRITE_ERROR') ? CURLE_WRITE_ERROR : null,
            defined('CURLE_MALFORMAT_USER') ? CURLE_MALFORMAT_USER : null,
            defined('CURLE_FTP_COULDNT_STOR_FILE') ? CURLE_FTP_COULDNT_STOR_FILE : null,
            defined('CURLE_READ_ERROR') ? CURLE_READ_ERROR : null,
            defined('CURLE_OUT_OF_MEMORY') ? CURLE_OUT_OF_MEMORY : null,
            defined('CURLE_OPERATION_TIMEOUTED') ? CURLE_OPERATION_TIMEOUTED : null,
            defined('CURLE_FTP_COULDNT_SET_ASCII') ? CURLE_FTP_COULDNT_SET_ASCII : null,
            defined('CURLE_FTP_PORT_FAILED') ? CURLE_FTP_PORT_FAILED : null,
            defined('CURLE_FTP_COULDNT_USE_REST') ? CURLE_FTP_COULDNT_USE_REST : null,
            defined('CURLE_FTP_COULDNT_GET_SIZE') ? CURLE_FTP_COULDNT_GET_SIZE : null,
            defined('CURLE_HTTP_RANGE_ERROR') ? CURLE_HTTP_RANGE_ERROR : null,
            defined('CURLE_HTTP_POST_ERROR') ? CURLE_HTTP_POST_ERROR : null,
            defined('CURLE_SSL_CONNECT_ERROR') ? CURLE_SSL_CONNECT_ERROR : null,
            defined('CURLE_FTP_BAD_DOWNLOAD_RESUME') ? CURLE_FTP_BAD_DOWNLOAD_RESUME : null,
            defined('CURLE_FILE_COULDNT_READ_FILE') ? CURLE_FILE_COULDNT_READ_FILE : null,
            defined('CURLE_LDAP_CANNOT_BIND') ? CURLE_LDAP_CANNOT_BIND : null,
            defined('CURLE_LDAP_SEARCH_FAILED') ? CURLE_LDAP_SEARCH_FAILED : null,
            defined('CURLE_LIBRARY_NOT_FOUND') ? CURLE_LIBRARY_NOT_FOUND : null,
            defined('CURLE_FUNCTION_NOT_FOUND') ? CURLE_FUNCTION_NOT_FOUND : null,
            defined('CURLE_ABORTED_BY_CALLBACK') ? CURLE_ABORTED_BY_CALLBACK : null,
            defined('CURLE_BAD_FUNCTION_ARGUMENT') ? CURLE_BAD_FUNCTION_ARGUMENT : null,
            defined('CURLE_BAD_CALLING_ORDER') ? CURLE_BAD_CALLING_ORDER : null,
            defined('CURLE_HTTP_PORT_FAILED') ? CURLE_HTTP_PORT_FAILED : null,
            defined('CURLE_BAD_PASSWORD_ENTERED') ? CURLE_BAD_PASSWORD_ENTERED : null,
            defined('CURLE_TOO_MANY_REDIRECTS') ? CURLE_TOO_MANY_REDIRECTS : null,
            defined('CURLE_UNKNOWN_TELNET_OPTION') ? CURLE_UNKNOWN_TELNET_OPTION : null,
            defined('CURLE_TELNET_OPTION_SYNTAX') ? CURLE_TELNET_OPTION_SYNTAX : null,
            defined('CURLE_OBSOLETE') ? CURLE_OBSOLETE : null,
            defined('CURLE_SSL_PEER_CERTIFICATE') ? CURLE_SSL_PEER_CERTIFICATE : null,
            defined('CURLE_GOT_NOTHING') ? CURLE_GOT_NOTHING : null,
            defined('CURLE_SSL_ENGINE_NOTFOUND') ? CURLE_SSL_ENGINE_NOTFOUND : null,
            defined('CURLE_SSL_ENGINE_SETFAILED') ? CURLE_SSL_ENGINE_SETFAILED : null,
            defined('CURLE_SEND_ERROR') ? CURLE_SEND_ERROR : null,
            defined('CURLE_RECV_ERROR') ? CURLE_RECV_ERROR : null,
            defined('CURLE_SHARE_IN_USE') ? CURLE_SHARE_IN_USE : null,
            defined('CURLE_SSL_CERTPROBLEM') ? CURLE_SSL_CERTPROBLEM : null,
            defined('CURLE_SSL_CIPHER') ? CURLE_SSL_CIPHER : null,
            defined('CURLE_SSL_CACERT') ? CURLE_SSL_CACERT : null,
            defined('CURLE_BAD_CONTENT_ENCODING') ? CURLE_BAD_CONTENT_ENCODING : null,
            defined('CURLE_LDAP_INVALID_URL') ? CURLE_LDAP_INVALID_URL : null,
            defined('CURLE_FILESIZE_EXCEEDED') ? CURLE_FILESIZE_EXCEEDED : null,
            defined('CURLE_FTP_SSL_FAILED') ? CURLE_FTP_SSL_FAILED : null,
            defined('CURLE_SSH') ? CURLE_SSH : null,
            defined('CURLFTPAUTH_DEFAULT') ? CURLFTPAUTH_DEFAULT : null,
            defined('CURLFTPAUTH_SSL') ? CURLFTPAUTH_SSL : null,
            defined('CURLFTPAUTH_TLS') ? CURLFTPAUTH_TLS : null,
            defined('CURLPROXY_HTTP') ? CURLPROXY_HTTP : null,
            defined('CURLPROXY_HTTP_1_0') ? CURLPROXY_HTTP_1_0 : null,
            defined('CURLPROXY_SOCKS4') ? CURLPROXY_SOCKS4 : null,
            defined('CURLPROXY_SOCKS5') ? CURLPROXY_SOCKS5 : null,
            defined('CURL_NETRC_OPTIONAL') ? CURL_NETRC_OPTIONAL : null,
            defined('CURL_NETRC_IGNORED') ? CURL_NETRC_IGNORED : null,
            defined('CURL_NETRC_REQUIRED') ? CURL_NETRC_REQUIRED : null,
            defined('CURL_HTTP_VERSION_NONE') ? CURL_HTTP_VERSION_NONE : null,
            defined('CURL_HTTP_VERSION_1_0') ? CURL_HTTP_VERSION_1_0 : null,
            defined('CURL_HTTP_VERSION_1_1') ? CURL_HTTP_VERSION_1_1 : null,
            defined('CURL_HTTP_VERSION_2') ? CURL_HTTP_VERSION_2 : null,
            defined('CURL_HTTP_VERSION_2TLS') ? CURL_HTTP_VERSION_2TLS : null,
            defined('CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE') ? CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE : null,
            defined('CURLM_CALL_MULTI_PERFORM') ? CURLM_CALL_MULTI_PERFORM : null,
            defined('CURLM_OK') ? CURLM_OK : null,
            defined('CURLM_BAD_HANDLE') ? CURLM_BAD_HANDLE : null,
            defined('CURLM_BAD_EASY_HANDLE') ? CURLM_BAD_EASY_HANDLE : null,
            defined('CURLM_OUT_OF_MEMORY') ? CURLM_OUT_OF_MEMORY : null,
            defined('CURLM_INTERNAL_ERROR') ? CURLM_INTERNAL_ERROR : null,
            defined('CURLMSG_DONE') ? CURLMSG_DONE : null,
            defined('CURLOPT_KEYPASSWD') ? CURLOPT_KEYPASSWD : null,
            defined('CURLOPT_SSH_AUTH_TYPES') ? CURLOPT_SSH_AUTH_TYPES : null,
            defined('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5') ? CURLOPT_SSH_HOST_PUBLIC_KEY_MD5 : null,
            defined('CURLOPT_SSH_PRIVATE_KEYFILE') ? CURLOPT_SSH_PRIVATE_KEYFILE : null,
            defined('CURLOPT_SSH_PUBLIC_KEYFILE') ? CURLOPT_SSH_PUBLIC_KEYFILE : null,
            defined('CURLOPT_SSL_OPTIONS') ? CURLOPT_SSL_OPTIONS : null,
            defined('CURLSSLOPT_ALLOW_BEAST') ? CURLSSLOPT_ALLOW_BEAST : null,
            defined('CURLSSLOPT_NO_REVOKE') ? CURLSSLOPT_NO_REVOKE : null,
            defined('CURLOPT_USERNAME') ? CURLOPT_USERNAME : null,
            defined('CURLOPT_SASL_IR') ? CURLOPT_SASL_IR : null,
            defined('CURLOPT_DNS_INTERFACE') ? CURLOPT_DNS_INTERFACE : null,
            defined('CURLOPT_DNS_LOCAL_IP4') ? CURLOPT_DNS_LOCAL_IP4 : null,
            defined('CURLOPT_DNS_LOCAL_IP6') ? CURLOPT_DNS_LOCAL_IP6 : null,
            defined('CURLOPT_XOAUTH2_BEARER') ? CURLOPT_XOAUTH2_BEARER : null,
            defined('CURLOPT_LOGIN_OPTIONS') ? CURLOPT_LOGIN_OPTIONS : null,
            defined('CURLOPT_EXPECT_100_TIMEOUT_MS') ? CURLOPT_EXPECT_100_TIMEOUT_MS : null,
            defined('CURLOPT_SSL_ENABLE_ALPN') ? CURLOPT_SSL_ENABLE_ALPN : null,
            defined('CURLOPT_SSL_ENABLE_NPN') ? CURLOPT_SSL_ENABLE_NPN : null,
            defined('CURLOPT_PINNEDPUBLICKEY') ? CURLOPT_PINNEDPUBLICKEY : null,
            defined('CURLOPT_UNIX_SOCKET_PATH') ? CURLOPT_UNIX_SOCKET_PATH : null,
            defined('CURLOPT_SSL_VERIFYSTATUS') ? CURLOPT_SSL_VERIFYSTATUS : null,
            defined('CURLOPT_PATH_AS_IS') ? CURLOPT_PATH_AS_IS : null,
            defined('CURLOPT_SSL_FALSESTART') ? CURLOPT_SSL_FALSESTART : null,
            defined('CURLOPT_PIPEWAIT') ? CURLOPT_PIPEWAIT : null,
            defined('CURLOPT_PROXY_SERVICE_NAME') ? CURLOPT_PROXY_SERVICE_NAME : null,
            defined('CURLOPT_SERVICE_NAME') ? CURLOPT_SERVICE_NAME : null,
            defined('CURLOPT_DEFAULT_PROTOCOL') ? CURLOPT_DEFAULT_PROTOCOL : null,
            defined('CURLOPT_STREAM_WEIGHT') ? CURLOPT_STREAM_WEIGHT : null,
            defined('CURLOPT_TFTP_NO_OPTIONS') ? CURLOPT_TFTP_NO_OPTIONS : null,
            defined('CURLOPT_CONNECT_TO') ? CURLOPT_CONNECT_TO : null,
            defined('CURLOPT_TCP_FASTOPEN') ? CURLOPT_TCP_FASTOPEN : null,
            defined('CURLMOPT_PIPELINING') ? CURLMOPT_PIPELINING : null,
            defined('CURLMOPT_MAXCONNECTS') ? CURLMOPT_MAXCONNECTS : null,
            defined('CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE') ? CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE : null,
            defined('CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE') ? CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE : null,
            defined('CURLMOPT_MAX_HOST_CONNECTIONS') ? CURLMOPT_MAX_HOST_CONNECTIONS : null,
            defined('CURLMOPT_MAX_PIPELINE_LENGTH') ? CURLMOPT_MAX_PIPELINE_LENGTH : null,
            defined('CURLMOPT_MAX_TOTAL_CONNECTIONS') ? CURLMOPT_MAX_TOTAL_CONNECTIONS : null,
            defined('CURLMOPT_PUSHFUNCTION') ? CURLMOPT_PUSHFUNCTION : null,
            defined('CURLSSH_AUTH_AGENT') ? CURLSSH_AUTH_AGENT : null,
            defined('CURLSSH_AUTH_ANY') ? CURLSSH_AUTH_ANY : null,
            defined('CURLSSH_AUTH_DEFAULT') ? CURLSSH_AUTH_DEFAULT : null,
            defined('CURLSSH_AUTH_HOST') ? CURLSSH_AUTH_HOST : null,
            defined('CURLSSH_AUTH_KEYBOARD') ? CURLSSH_AUTH_KEYBOARD : null,
            defined('CURLSSH_AUTH_NONE') ? CURLSSH_AUTH_NONE : null,
            defined('CURLSSH_AUTH_PASSWORD') ? CURLSSH_AUTH_PASSWORD : null,
            defined('CURLSSH_AUTH_PUBLICKEY') ? CURLSSH_AUTH_PUBLICKEY : null,
            defined('CURL_WRAPPERS_ENABLED') ? CURL_WRAPPERS_ENABLED : null,
            defined('CURLPAUSE_ALL') ? CURLPAUSE_ALL : null,
            defined('CURLPAUSE_CONT') ? CURLPAUSE_CONT : null,
            defined('CURLPAUSE_RECV') ? CURLPAUSE_RECV : null,
            defined('CURLPAUSE_RECV_CONT') ? CURLPAUSE_RECV_CONT : null,
            defined('CURLPAUSE_SEND') ? CURLPAUSE_SEND : null,
            defined('CURLPAUSE_SEND_CONT') ? CURLPAUSE_SEND_CONT : null,
            defined('CURLPIPE_NOTHING') ? CURLPIPE_NOTHING : null,
            defined('CURLPIPE_HTTP1') ? CURLPIPE_HTTP1 : null,
            defined('CURLPIPE_MULTIPLEX') ? CURLPIPE_MULTIPLEX : null,
            defined('CURLPROXY_SOCKS4A') ? CURLPROXY_SOCKS4A : null,
            defined('CURLPROXY_SOCKS5_HOSTNAME') ? CURLPROXY_SOCKS5_HOSTNAME : null,
            defined('CURLHEADER_SEPARATE') ? CURLHEADER_SEPARATE : null,
            defined('CURLHEADER_UNIFIED') ? CURLHEADER_UNIFIED : null,
            defined('CURLPROTO_SMB') ? CURLPROTO_SMB : null,
            defined('CURLPROTO_SMBS') ? CURLPROTO_SMBS : null,
        );
    }
    
    /*public function multiExecute($multiCurlArray, $logArray=array(), $fileDownloadPathArray=null)
    {
        $urlCount       = count ($multiCurlArray);

        $curl_arr	= array();

        $master		= curl_multi_init();
        
        $resultArray    = [];
        
        for ($i = 0; $i < $urlCount; $i++) {
            
            if (!isset($multiCurlArray[$i][CURLOPT_URL])) {
                $i++;
                continue;
            }
            
            if ($i % $this->maxParallelConnections == 0 && $i > 0) {
                do {
                    curl_multi_exec($master, $running);
                } while($running > 0);

                $startCount      =   $i - $this->maxParallelConnections;
                
                for ($j = $startCount; $j < $i; $j++) {
                    
                    //$resultArray[$j] = curl_multi_getcontent ($curl_arr[$j]);
                    
                    $curlResult = curl_multi_getcontent ($curl_arr[$j]);
                    
                    if ($curlResult) {
                        if (!empty($fileDownloadPathArray[$multiCurlArray[$j][CURLOPT_URL]])) {
                            if (!file_put_contents($fileDownloadPathArray[$multiCurlArray[$j][CURLOPT_URL]], $curlResult)) {
                                $this->error = 'Unable to save result at path : ' 
                                        . $fileDownloadPathArray[$multiCurlArray[$j][CURLOPT_URL]];
                                return false;
                            }
                        }
                        
                        if (!empty($logArray[$multiCurlArray[$j][CURLOPT_URL]])) {
                            $logArray[$multiCurlArray[$j][CURLOPT_URL]] = true;
                        } 
                    }
                    
                    $resultArray[$multiCurlArray[$j][CURLOPT_URL]] = $curlResult;
                }

                curl_multi_close($master);
                
                $master		= curl_multi_init();
            }
            
            //$curl_arr[$i]	=   curl_init($multiCurlArray[$i][CURLOPT_URL]);
            $curl_arr[$i]	=   curl_init();
            
            foreach ($multiCurlArray[$i] as $key => $value) {
                curl_setopt($curl_arr[$i], $key, $value);
            }
            
           
            
            curl_multi_add_handle($master, $curl_arr[$i]);
        }
        
        //echo '<br>Result array : <pre>' . print_r($resultArray, true) . '</pre>';exit;
        
        if (count($resultArray)) {
            //return $resultArray;
            return [
                'resultArray'           =>  $resultArray,
                'logArray'              =>  $logArray, 
                'fileDownloadPathArray' => $fileDownloadPathArray,
            ];
        }
        
        $this->error = 'No response returned from multi curl URLs';
        
        return false;
    }*/
    
    public function multiExecute($multiCurlArray)
    {
        $urlCount       = count ($multiCurlArray);

        $curl_arr	= array();

        $master		= curl_multi_init();
        
        //echo "results: ";
        $resultArray    = [];
        
        for ($i = 0; $i < $urlCount; $i++) {
            
            if (!isset($multiCurlArray[$i][CURLOPT_URL])) {
                $i++;
                continue;
            }
            
            /*if ($i % $this->maxParallelConnections == 0 && $i > 0) {
                do {
                    curl_multi_exec($master, $running);
                } while($running > 0);

                $startCount         =   $i - $this->maxParallelConnections;
                
                for($j = $startCount; $j < $i; $j++)
                {
                    $resultArray[$j] = curl_multi_getcontent ($curl_arr[$j]);
                    //echo( $i . "\n" . $results . "\n");
                }

                curl_multi_close($master);
                //break;
                
                $master		= curl_multi_init();
            }*/
            
            //$curl_arr[$i]	=   curl_init($multiCurlArray[$i][CURLOPT_URL]);
            $curl_arr[$i]	=   curl_init();
            
            foreach ($multiCurlArray[$i] as $key => $value) {
                curl_setopt($curl_arr[$i], $key, $value);
            }
            //$resultUrlArray[$i] =   $multiCurlArray[$i];
            /*curl_setopt($curl_arr[$i], CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl_arr[$i], CURLOPT_USERAGENT, $userAgent);*/
            curl_multi_add_handle($master, $curl_arr[$i]);
        }
        
        do {
            curl_multi_exec($master, $running);
        } while($running > 0);

        for ($i = 0; $i < $urlCount; $i++)
        {
            $resultArray[$i] = curl_multi_getcontent ($curl_arr[$i]);
            //echo( $i . "\n" . $results . "\n");
        }

        curl_multi_close($master);
        
        //echo '<br>Result array : <pre>' . print_r($resultArray, true) . '</pre>';exit;
        
        if (count($resultArray)) {
            return $resultArray;
        }
        
        $this->error = 'No response returned from multi curl URLs';
        
        return false;
    }
}
