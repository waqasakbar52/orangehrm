<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeaveEntitlement extends \OrangeHRM\Entity\LeaveEntitlement implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'employee', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'noOfDays', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'daysUsed', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'leaveType', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'fromDate', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'toDate', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'creditedDate', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'note', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'entitlementType', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'deleted', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'createdBy', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'leaveLeaveEntitlements', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'employee', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'noOfDays', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'daysUsed', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'leaveType', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'fromDate', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'toDate', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'creditedDate', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'note', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'entitlementType', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'deleted', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'createdBy', '' . "\0" . 'OrangeHRM\\Entity\\LeaveEntitlement' . "\0" . 'leaveLeaveEntitlements', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeaveEntitlement $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployee(): \OrangeHRM\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployee', []);

        return parent::getEmployee();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployee(\OrangeHRM\Entity\Employee $employee): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployee', [$employee]);

        parent::setEmployee($employee);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoOfDays(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoOfDays', []);

        return parent::getNoOfDays();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoOfDays(float $noOfDays): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoOfDays', [$noOfDays]);

        parent::setNoOfDays($noOfDays);
    }

    /**
     * {@inheritDoc}
     */
    public function getDaysUsed(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDaysUsed', []);

        return parent::getDaysUsed();
    }

    /**
     * {@inheritDoc}
     */
    public function setDaysUsed(float $daysUsed): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDaysUsed', [$daysUsed]);

        parent::setDaysUsed($daysUsed);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeaveType(): \OrangeHRM\Entity\LeaveType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeaveType', []);

        return parent::getLeaveType();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeaveType(\OrangeHRM\Entity\LeaveType $leaveType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeaveType', [$leaveType]);

        parent::setLeaveType($leaveType);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromDate(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromDate', []);

        return parent::getFromDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromDate(\DateTime $fromDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromDate', [$fromDate]);

        parent::setFromDate($fromDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getToDate(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToDate', []);

        return parent::getToDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setToDate(\DateTime $toDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToDate', [$toDate]);

        parent::setToDate($toDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditedDate(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditedDate', []);

        return parent::getCreditedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditedDate(?\DateTime $creditedDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditedDate', [$creditedDate]);

        parent::setCreditedDate($creditedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', []);

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote(string $note): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', [$note]);

        parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntitlementType(): \OrangeHRM\Entity\LeaveEntitlementType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntitlementType', []);

        return parent::getEntitlementType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntitlementType(\OrangeHRM\Entity\LeaveEntitlementType $entitlementType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntitlementType', [$entitlementType]);

        parent::setEntitlementType($entitlementType);
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeleted', []);

        return parent::isDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted(bool $deleted): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): \OrangeHRM\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\OrangeHRM\Entity\User $createdBy): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecorator(): object
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecorator', []);

        return parent::getDecorator();
    }

}