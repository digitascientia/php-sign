<?php

namespace Helori\PhpSign\Elements;


class Scenario
{
    /**
     * The scenario title
     *
     * @var string
     */
    protected $title;

    /**
     * The signers
     *
     * @var array
     */
    protected $signers;

    /**
     * The documents to sign
     *
     * @var array
     */
    protected $documents;

    /**
     * The signatures locations for the signers on the documents
     *
     * @var array
     */
    protected $signatures;

    /**
     * Create a new Sign instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the scenario title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the scenario title
     *
     * @param  string  $title
     * @return string
     */
    public function setTitle($title)
    {
        return $this->title = $title;
    }

    /**
     * Get the signers
     *
     * @return array
     */
    public function getSigners()
    {
        return $this->signers;
    }

    /**
     * Add new signers
     *
     * @param  array  $signers
     * @return array
     */
    public function setSigners(array $signers)
    {
        foreach($signers as $signer){
            $this->setSigner($signer)
        }

        return $this->signers;
    }

    /**
     * Add a new signer
     *
     * @param  Signer  $signer
     * @return Signer
     */
    public function setSigner(Signer $signer)
    {
        $this->signers[] = $signer;
        return $signer;
    }

    /**
     * Get the documents
     *
     * @return array
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Add new documents
     *
     * @param  array  $documents
     * @return array
     */
    public function setDocuments(array $documents)
    {
        foreach($documents as $document){
            $this->setDocument($document)
        }

        return $this->documents;
    }

    /**
     * Add a new document
     *
     * @param  Document  $document
     * @return Document
     */
    public function setDocument(Document $document)
    {
        $this->documents[] = $document;
        return $document;
    }

    /**
     * Get the signatures
     *
     * @return array
     */
    public function getSignatures()
    {
        return $this->signatures;
    }

    /**
     * Add new signatures
     *
     * @param  array  $signatures
     * @return array
     */
    public function setSignatures(array $signatures)
    {
        foreach($signatures as $signature){
            $this->setSignature($signature)
        }

        return $this->signatures;
    }

    /**
     * Add a new signature
     *
     * @param  Signature  $signature
     * @return Signature
     */
    public function setSignature(Signature $signature)
    {
        $this->signatures[] = $signature;
        return $signature;
    }
}