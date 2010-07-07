<?php

/**
 * File holding the Ssh2Filesystem class.
 *
 * @file Ssh2Filesystem.php
 * @ingroup Deployment
 * @ingroup Filesystem
 *
 * @author Jeroen De Dauw
 */

/**
 * Filesystem class for file and folder manipulation over SSH2.
 * 
 * @author Jeroen De Dauw
 */
class Ssh2Filesystem extends Filesystem {
	
	/**
	 * A list of options.
	 * 
	 * @var array
	 */
	protected $options = array();
	
	/**
	 * The FTP connection link.
	 * 
	 * @var resource
	 */
	protected $connection;
	
	/**
	 * Indicates if public key authentication is used instead of a regular password.
	 * 
	 * @var boolean
	 */
	protected $publicKeyAuthentication;
	
	/**
	 * Constructor.
	 * 
	 * @param array $options
	 */
	public function __construct( array $options ) {
		// Check if possible to use ssh2 functions.
		if ( !extension_loaded( 'ssh2' ) ) {
			$this->addError( 'deploy-ssh2-not-loaded' );
			return false;
		}
		
		// Check if function stream_get_contents is available.
		if ( !function_exists( 'stream_get_contents' ) ) {
			$this->addError( 'deploy-ssh2-no-stream-get-contents' );
			return false;
		}		
		
		// Check for missing required options.		
		if ( !array_key_exists( 'password', $options ) ) {
			$this->addError( 'deploy-ssh2-password-required' );
		}	

		if ( !array_key_exists( 'hostname', $options ) ) {
			$this->addError( 'deploy-ssh2-hostname-required' );
		}

		// TODO: validate that both keys are set (error if only one)
		$this->publicKeyAuthentication = array_key_exists( 'public_key', $options ) && array_key_exists( 'private_key', $options );
		
		// Regular authentication needs a username.
		if ( !$this->publicKeyAuthentication && !array_key_exists( 'username', $options ) ) {
			$this->addError( 'deploy-ssh2-username-required' );
		}
		
		// Regular authentication needs a password.
		if ( !$this->publicKeyAuthentication && !array_key_exists( 'password', $options ) ) {
			$this->addError( 'deploy-ssh2-password-required' );
		}		
		
		// Set default option values for those not provided.
		if ( !array_key_exists( 'port', $options ) ) {
			$options['port'] = 21;
		}
		
		// Store the options.
		$this->options = $options;		
	}
	
	/**
	 * @see Filesystem::connect
	 */
	public function connect() {
		
	}
	
	/**
	 * @see Filesystem::changeDir
	 */
	public function changeDir( $dir ) {
		
	}

	/**
	 * @see Filesystem::changeFileGroup
	 */
	public function changeFileGroup( $file, $group, $recursive = false ) {
		
	}

	/**
	 * @see Filesystem::chmod
	 */
	public function chmod( $file, $mode = false, $recursive = false ) {
		
	}

	/**
	 * @see Filesystem::chown
	 */
	public function chown( $file, $owner, $recursive = false ) {
		
	}

	/**
	 * @see Filesystem::delete
	 */
	public function delete( $path, $recursive = false ) {
		
	}

	/**
	 * @see Filesystem::doCopy
	 */
	protected function doCopy( $from, $to ) {
		
	}

	/**
	 * @see Filesystem::doMove
	 */
	protected function doMove( $from, $to ) {
		
	}

	/**
	 * @see Filesystem::exists
	 */
	public function exists( $file ) {
		
	}

	/**
	 * @see Filesystem::getChmod
	 */
	public function getChmod( $file ) {
		
	}

	/**
	 * @see Filesystem::getContents
	 */
	public function getContents() {
		
	}

	/**
	 * @see Filesystem::getCreationTime
	 */
	public function getCreationTime( $file ) {
		
	}

	/**
	 * @see Filesystem::getCurrentWorkingDir
	 */
	public function getCurrentWorkingDir() {
		
	}

	/**
	 * @see Filesystem::getGroup
	 */
	public function getGroup( $file ) {
		
	}

	/**
	 * @see Filesystem::getModificationTime
	 */
	public function getModificationTime( $file ) {
		
	}

	/**
	 * @see Filesystem::getOwner
	 */
	public function getOwner( $file ) {
		
	}

	/**
	 * @see Filesystem::getSize
	 */
	public function getSize( $file ) {
		
	}

	/**
	 * @see Filesystem::isDir
	 */
	public function isDir( $path ) {
		
	}

	/**
	 * @see Filesystem::isFile
	 */
	public function isFile( $path ) {
		
	}

	/**
	 * @see Filesystem::isReadable
	 */
	public function isReadable( $file ) {
		
	}

	/**
	 * @see Filesystem::isWritable
	 */
	public function isWritable( $file ) {
		
	}

	/**
	 * @see Filesystem::listDir
	 */
	public function listDir( $path, $includeHidden = true, $recursive = false ) {
		
	}

	/**
	 * @see Filesystem::makeDir
	 */
	public function makeDir( $path, $chmod = false, $chown = false, $chgrp = false ) {
		
	}

	/**
	 * @see Filesystem::touch
	 */
	public function touch( $file, $time = 0, $atime = 0 ) {
		
	}

	/**
	 * @see Filesystem::writeToFile
	 */
	public function writeToFile( $file, $contents ) {
		
	}	
	
}