<?php

/**
 * Memcached class.
 */

class Memcached {
	/**
	 * Libmemcached behavior options.
	 */

	const OPT_HASH = 2;

	const HASH_DEFAULT = 0;

	const HASH_MD5 = 1;

	const HASH_CRC = 2;

	const HASH_FNV1_64 = 3;

	const HASH_FNV1A_64 = 4;

	const HASH_FNV1_32 = 5;

	const HASH_FNV1A_32 = 6;

	const HASH_HSIEH = 7;

	const HASH_MURMUR = 8;

	const OPT_DISTRIBUTION = 9;

	const DISTRIBUTION_MODULA = 0;

	const DISTRIBUTION_CONSISTENT = 1;

	const DISTRIBUTION_VIRTUAL_BUCKET = 6;

	const OPT_LIBKETAMA_COMPATIBLE = 16;

	const OPT_LIBKETAMA_HASH = 17;

	const OPT_TCP_KEEPALIVE = 32;

	const OPT_BUFFER_WRITES = 10;

	const OPT_BINARY_PROTOCOL = 18;

	const OPT_NO_BLOCK = 0;

	const OPT_TCP_NODELAY = 1;

	const OPT_SOCKET_SEND_SIZE = 4;

	const OPT_SOCKET_RECV_SIZE = 5;

	const OPT_CONNECT_TIMEOUT = 14;

	const OPT_RETRY_TIMEOUT = 15;

	const OPT_DEAD_TIMEOUT = 36;

	const OPT_SEND_TIMEOUT = 19;

	const OPT_RECV_TIMEOUT = 20;

	const OPT_POLL_TIMEOUT = 8;

	const OPT_SERVER_FAILURE_LIMIT = 21;

	const OPT_SERVER_TIMEOUT_LIMIT = 37;

	const OPT_CACHE_LOOKUPS = 6;

	const OPT_AUTO_EJECT_HOSTS = 28;

	const OPT_NOREPLY = 26;

	const OPT_VERIFY_KEY = 13;

	const OPT_USE_UDP = 27;

	const OPT_NUMBER_OF_REPLICAS = 29;

	const OPT_RANDOMIZE_REPLICA_READ = 30;

	const OPT_REMOVE_FAILED_SERVERS = 35;

	/**
	 * Supported serializers
	 */
	const HAVE_JSON = true;

	const HAVE_IGBINARY = true;

	const HAVE_MSGPACK = false;

	const HAVE_ENCODING = true;

	/**
	 * Feature support
	 */
	const HAVE_SESSION = true;

	const HAVE_SASL = true;

	/**
	 * Class options.
	 */
	const OPT_COMPRESSION = -1001;

	const OPT_COMPRESSION_TYPE = -1004;

	const OPT_PREFIX_KEY = -1002;

	/**
	 * Serializer constants
	 */
	const SERIALIZER_PHP = 1;

	const SERIALIZER_IGBINARY = 2;

	const SERIALIZER_JSON = 3;

	const SERIALIZER_JSON_ARRAY = 4;

	const SERIALIZER_MSGPACK = 5;

	/**
	 * Compression types
	 */
	const COMPRESSION_FASTLZ = 2;

	const COMPRESSION_ZLIB = 1;

	/**
	 * Flags for get and getMulti operations.
	 */
	// Whether to preserve key order in the result
	const GET_PRESERVE_ORDER = 1;

	// Whether to fetch CAS token as well (use "gets").
	const GET_EXTENDED = 2;

	/**
	 * Return values
	 */
	const GET_ERROR_RETURN_VALUE = false;

	const RES_PAYLOAD_FAILURE = -1001;

    const RES_SUCCESS = 0;
    const RES_FAILURE = 1;
    const RES_HOST_LOOKUP_FAILURE = 2;
    const RES_CONNECTION_FAILURE = 3;
    const RES_CONNECTION_BIND_FAILURE = 4;
    const RES_WRITE_FAILURE = 5;
    const RES_READ_FAILURE = 6;
    const RES_UNKNOWN_READ_FAILURE = 7;
    const RES_PROTOCOL_ERROR = 8;
    const RES_CLIENT_ERROR = 9;
    const RES_SERVER_ERROR = 10;
    const RES_DATA_EXISTS = 12;
    const RES_DATA_DOES_NOT_EXIST = 13;
    const RES_NOTSTORED = 14;
    const RES_STORED = 15;
    const RES_NOTFOUND = 16;
    const RES_PARTIAL_READ = 18;
    const RES_SOME_ERRORS = 19;
    const RES_NO_SERVERS = 20;
    const RES_END = 21;
    const RES_DELETED = 22;
    const RES_VALUE = 23;
    const RES_STAT = 24;
    const RES_ITEM = 25;
    const RES_ERRNO = 26;
    const RES_FAIL_UNIX_SOCKET = 27;
    const RES_NOT_SUPPORTED = 28;
    const RES_NO_KEY_PROVIDED = 29;
    const RES_FETCH_NOTFINISHED = 30;
    const RES_TIMEOUT = 31;
    const RES_BUFFERED = 32;
    const RES_BAD_KEY_PROVIDED = 33;
    const RES_INVALID_HOST_PROTOCOL = 34;
    const RES_SERVER_MARKED_DEAD = 35;
    const RES_UNKNOWN_STAT_KEY = 36;
    const RES_INVALID_ARGUMENTS = 38;
    const RES_PARSE_ERROR = 43;
    const RES_PARSE_USER_ERROR = 44;
    const RES_DEPRECATED = 45;
    const RES_IN_PROGRESS = 46;
    const RES_MAXIMUM_RETURN = 49;
    const RES_MEMORY_ALLOCATION_FAILURE = 17;
    const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;
    const RES_E2BIG = 37;
    const RES_KEY_TOO_BIG = 39;
    const RES_SERVER_TEMPORARILY_DISABLED = 47;
    const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;
    const RES_AUTH_PROBLEM = 40;
    const RES_AUTH_FAILURE = 41;
    const RES_AUTH_CONTINUE = 42;


	public function __construct( $persistent_id = '', $on_new_object_cb = null ) {}

	public function get( $key, callable $cache_cb = null, $flags = 0) {}

	public function getByKey( $server_key, $key, callable $cache_cb = null, $flags = 0 ) {}

	public function getMulti( array $keys, $flags = 0) {}

	public function getMultiByKey( $server_key, array $keys, $flags = 0) {}

	public function getDelayed( array $keys, $with_cas = null, $value_cb = null ) {}

	public function getDelayedByKey( $server_key, array $keys, $with_cas = null, $value_cb = null ) {}

	public function fetch( ) {}

	public function fetchAll( ) {}

	public function set( $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function touch( $key, $expiration = 0 ) {}

	public function touchbyKey( $key, $expiration = 0 ) {}

	public function setByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function setMulti( array $items, $expiration = 0, $udf_flags = 0 ) {}

	public function setMultiByKey( $server_key, array $items, $expiration = 0, $udf_flags = 0 ) {}

	public function cas( $token, $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function casByKey( $token, $server_key, $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function add( $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function addByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function append( $key, $value ) {}

	public function appendByKey( $server_key, $key, $value ) {}

	public function prepend( $key, $value ) {}

	public function prependByKey( $server_key, $key, $value ) {}

	public function replace( $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function replaceByKey( $server_key, $key, $value, $expiration = 0, $udf_flags = 0 ) {}

	public function delete( $key, $time = 0 ) {}

	public function deleteByKey( $server_key, $key, $time = 0 ) {}

	public function deleteMulti( array $keys, $expiration = 0 ) {}

	public function deleteMultiByKey( $server_key, array $keys, $expiration = 0 ) {}

	public function increment( $key, $offset = 1, $initial_value = 0, $expiry = 0) {}

	public function decrement( $key, $offset = 1, $initial_value = 0, $expiry = 0) {}

	public function getOption( $option ) {}

	public function setOption( $option, $value ) {}

	public function setOptions( array $options ) {}

	public function setBucket( array $host_map, array $forward_map, $replicas ) {}

	public function addServer( $host, $port,  $weight = 0 ) {}

	public function addServers( array $servers ) {}

	public function getServerList( ) {}

	public function getServerByKey( $server_key ) {}

	public function getLastErrorMessage( ) {}

	public function getLastErrorCode( ) {}

	public function getLastErrorErrno( ) {}

	public function getLastDisconnectedServer( ) {}

	public function flush( $delay = 0 ) {}

	public function flushBuffers( ) {}

	public function getStats( $type = null ) {}

	public function getAllKeys( ) {}

	public function getVersion( ) {}

	public function getResultCode( ) {}

	public function getResultMessage( ) {}

	public function isPersistent( ) {}

	public function isPristine( ) {}

	public function setSaslAuthData( $username, $password ) {}

	public function setEncodingKey( $key ) {}

}

class MemcachedException extends Exception {

	function __construct( $errmsg = "", $errcode  = 0 ) {
        parent::__construct( $errmsg, $errcode );
    }

}
