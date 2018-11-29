<?php


/**
 * @description Base class for all API Exceptions
 *              Generates API Exception response
 * @author Rituraj Raina
 */
namespace Helpme\Exceptions;

class ApiException extends \Exception
{
    protected $group; //group to which exception belongs. group viz; client, server, database, semantic
    protected $statusCode; //http status code
    protected $statusText; //http status text
    protected $type; //exception group are further classified to types
    protected $details;


    public static $exceptionTypes = array(
        //Client
        400 => 'BadRequest',
        401 => 'Unauthorized',
        402 => 'PaymentRequired',
        403 => 'Forbidden',
        404 => 'NotFound',
        405 => 'MethodNotAllowed',
        406 => 'NotAcceptable',
        407 => 'ProxyAuthenticationRequired',
        408 => 'RequestTimeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'LengthRequired',
        412 => 'PreconditionFailed',
        413 => 'RequestEntityTooLarge',
        414 => 'Request-URITooLong',
        415 => 'UnsupportedMediaType',
        416 => 'RequestedRangeNotSatisfiable',
        417 => 'ExpectationFailed',
        418 => 'Imateapot',                                               // RFC2324
        422 => 'UnprocessableEntity',                                        // RFC4918
        423 => 'Locked',                                                      // RFC4918
        424 => 'FailedDependency',                                           // RFC4918
        425 => 'ReservedForWebDAVAdvancedCollectionsExpiredProposal',   // RFC2817
        426 => 'UpgradeRequired',                                            // RFC2817
        428 => 'PreconditionRequired',                                       // RFC6585
        429 => 'TooManyRequests',                                           // RFC6585
        431 => 'RequestHeaderFieldsTooLarge',                             // RFC6585
        //Server (Database exception comes under Server)
        500 => 'InternalServerError',
        501 => 'NotImplemented',
        502 => 'BadGateway',
        503 => 'ServiceUnavailable',
        504 => 'GatewayTimeout',
        505 => 'HTTPVersionNotSupported',
        506 => 'VariantAlsoNegotiates',                      // RFC2295
        507 => 'InsufficientStorage',                                        // RFC4918
        508 => 'LoopDetected',                                               // RFC5842
        510 => 'NotExtended',                                                // RFC2774
        511 => 'NetworkAuthenticationRequired',                             // RFC6585
    );


    /*
     * @author: Rituraj Raina
    */
    public function __construct($group,$statusCode,$statusText,$message='',$details=null) {
        $this->type = self::$exceptionTypes[$statusCode];
        $this->group = $group;
        $this->statusCode = $statusCode;
        $this->statusText = $statusText;
        $this->message = $message;
        
        if(!empty($details)){
            $this->details = $details;
        }
    }
    
    //exception group are further classified to types....get them
    final public function getType(){
        return $this->type;
    }
    
    //get group to which exception belongs. group viz; client, server, database, semantic
    final public function getGroup(){
        return $this->group;
    }
    
    //get http status code
    final public function getStatusCode(){
        return $this->statusCode;
    }
    
    //get http status text
    final public function getStatusText(){
        return $this->statusText;
    }
    
    //get http status text
    final public function getDetails(){
        return $this->details;
    }
}