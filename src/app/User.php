<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Audit;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements MustVerifyEmail, Auditable
{
    use Notifiable, HasRoles, HasApiTokens, \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phonefield', 'user_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'user_status' => 'boolean'
    ];

    /**
     * Auditable Model audits.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function audits(): MorphMany
    {
        // TODO: Implement audits() method.
    }

    /**
     * Set the Audit event.
     *
     * @param string $event
     *
     * @return Auditable
     */
    public function setAuditEvent(string $event): Auditable
    {
        // TODO: Implement setAuditEvent() method.
    }

    /**
     * Get the Audit event that is set.
     *
     * @return string|null
     */
    public function getAuditEvent()
    {
        // TODO: Implement getAuditEvent() method.
    }

    /**
     * Get the events that trigger an Audit.
     *
     * @return array
     */
    public function getAuditEvents(): array
    {
        // TODO: Implement getAuditEvents() method.
    }

    /**
     * Is the model ready for auditing?
     *
     * @return bool
     */
    public function readyForAuditing(): bool
    {
        // TODO: Implement readyForAuditing() method.
    }

    /**
     * Return data for an Audit.
     *
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     *
     * @return array
     */
    public function toAudit(): array
    {
        // TODO: Implement toAudit() method.
    }

    /**
     * Get the (Auditable) attributes included in audit.
     *
     * @return array
     */
    public function getAuditInclude(): array
    {
        // TODO: Implement getAuditInclude() method.
    }

    /**
     * Get the (Auditable) attributes excluded from audit.
     *
     * @return array
     */
    public function getAuditExclude(): array
    {
        // TODO: Implement getAuditExclude() method.
    }

    /**
     * Get the strict audit status.
     *
     * @return bool
     */
    public function getAuditStrict(): bool
    {
        // TODO: Implement getAuditStrict() method.
    }

    /**
     * Get the audit (Auditable) timestamps status.
     *
     * @return bool
     */
    public function getAuditTimestamps(): bool
    {
        // TODO: Implement getAuditTimestamps() method.
    }

    /**
     * Get the Audit Driver.
     *
     * @return string|null
     */
    public function getAuditDriver()
    {
        // TODO: Implement getAuditDriver() method.
    }

    /**
     * Get the Audit threshold.
     *
     * @return int
     */
    public function getAuditThreshold(): int
    {
        // TODO: Implement getAuditThreshold() method.
    }

    /**
     * Get the Attribute modifiers.
     *
     * @return array
     */
    public function getAttributeModifiers(): array
    {
        // TODO: Implement getAttributeModifiers() method.
    }

    /**
     * Transform the data before performing an audit.
     *
     * @param array $data
     *
     * @return array
     */
    public function transformAudit(array $data): array
    {
        // TODO: Implement transformAudit() method.
    }

    /**
     * Generate an array with the model tags.
     *
     * @return array
     */
    public function generateTags(): array
    {
        // TODO: Implement generateTags() method.
    }

    /**
     * Transition to another model state from an Audit.
     *
     * @param Audit $audit
     * @param bool $old
     *
     * @throws \OwenIt\Auditing\Exceptions\AuditableTransitionException
     *
     * @return Auditable
     */
    public function transitionTo(Audit $audit, bool $old = false): Auditable
    {
        // TODO: Implement transitionTo() method.
    }
}
