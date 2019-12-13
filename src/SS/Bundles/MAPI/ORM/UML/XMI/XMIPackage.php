<?php

namespace SS\MAPIBundle\ORM\UML\XMI;

/**
 * Class representing XMIPackage
 */
class XMIPackage
{

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\Difference[] $difference
     */
    private $difference = null;

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\Add[] $add
     */
    private $add = null;

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\Replace[] $replace
     */
    private $replace = null;

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\Delete[] $delete
     */
    private $delete = null;

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\XMI[] $xMI
     */
    private $xMI = null;

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\Documentation[] $documentation
     */
    private $documentation = null;

    /**
     * @property \\SS\\MAPIBundle\\ORM\UML\XMI\Extension[] $extension
     */
    private $extension = null;

    /**
     * Adds as difference
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Difference $difference
     */
    public function addToDifference(\\SS\\MAPIBundle\\ORM\UML\XMI\Difference $difference)
    {
        $this->difference[] = $difference;
        return $this;
    }

    /**
     * isset difference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDifference($index)
    {
        return isset($this->difference[$index]);
    }

    /**
     * unset difference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDifference($index)
    {
        unset($this->difference[$index]);
    }

    /**
     * Gets as difference
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\Difference[]
     */
    public function getDifference()
    {
        return $this->difference;
    }

    /**
     * Sets a new difference
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Difference[] $difference
     * @return self
     */
    public function setDifference(array $difference)
    {
        $this->difference = $difference;
        return $this;
    }

    /**
     * Adds as add
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Add $add
     */
    public function addToAdd(\\SS\\MAPIBundle\\ORM\UML\XMI\Add $add)
    {
        $this->add[] = $add;
        return $this;
    }

    /**
     * isset add
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdd($index)
    {
        return isset($this->add[$index]);
    }

    /**
     * unset add
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdd($index)
    {
        unset($this->add[$index]);
    }

    /**
     * Gets as add
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\Add[]
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Sets a new add
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Add[] $add
     * @return self
     */
    public function setAdd(array $add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * Adds as replace
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Replace $replace
     */
    public function addToReplace(\\SS\\MAPIBundle\\ORM\UML\XMI\Replace $replace)
    {
        $this->replace[] = $replace;
        return $this;
    }

    /**
     * isset replace
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReplace($index)
    {
        return isset($this->replace[$index]);
    }

    /**
     * unset replace
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReplace($index)
    {
        unset($this->replace[$index]);
    }

    /**
     * Gets as replace
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\Replace[]
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * Sets a new replace
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Replace[] $replace
     * @return self
     */
    public function setReplace(array $replace)
    {
        $this->replace = $replace;
        return $this;
    }

    /**
     * Adds as delete
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Delete $delete
     */
    public function addToDelete(\\SS\\MAPIBundle\\ORM\UML\XMI\Delete $delete)
    {
        $this->delete[] = $delete;
        return $this;
    }

    /**
     * isset delete
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDelete($index)
    {
        return isset($this->delete[$index]);
    }

    /**
     * unset delete
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDelete($index)
    {
        unset($this->delete[$index]);
    }

    /**
     * Gets as delete
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\Delete[]
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Sets a new delete
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Delete[] $delete
     * @return self
     */
    public function setDelete(array $delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Adds as xMI
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\XMI $xMI
     */
    public function addToXMI(\\SS\\MAPIBundle\\ORM\UML\XMI\XMI $xMI)
    {
        $this->xMI[] = $xMI;
        return $this;
    }

    /**
     * isset xMI
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetXMI($index)
    {
        return isset($this->xMI[$index]);
    }

    /**
     * unset xMI
     *
     * @param scalar $index
     * @return void
     */
    public function unsetXMI($index)
    {
        unset($this->xMI[$index]);
    }

    /**
     * Gets as xMI
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\XMI[]
     */
    public function getXMI()
    {
        return $this->xMI;
    }

    /**
     * Sets a new xMI
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\XMI[] $xMI
     * @return self
     */
    public function setXMI(array $xMI)
    {
        $this->xMI = $xMI;
        return $this;
    }

    /**
     * Adds as documentation
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Documentation $documentation
     */
    public function addToDocumentation(\\SS\\MAPIBundle\\ORM\UML\XMI\Documentation $documentation)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * isset documentation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocumentation($index)
    {
        return isset($this->documentation[$index]);
    }

    /**
     * unset documentation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocumentation($index)
    {
        unset($this->documentation[$index]);
    }

    /**
     * Gets as documentation
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\Documentation[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Documentation[] $documentation
     * @return self
     */
    public function setDocumentation(array $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Extension $extension
     */
    public function addToExtension(\\SS\\MAPIBundle\\ORM\UML\XMI\Extension $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * @see \SS\MAPIBundle\ORM\UML\XMI\Extension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \\SS\\MAPIBundle\\ORM\UML\XMI\Extension[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

