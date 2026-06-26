<?php

declare(strict_types=1);

namespace App\Modules\Contacts\Models;

use App\Modules\Contacts\Entities\ContactEntity;
use CodeIgniter\Model;

final class ContactModel extends Model
{
    protected $table         = 'contacts_contacts';
    protected $primaryKey    = 'id';
    protected $returnType    = ContactEntity::class;
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';

    protected $allowedFields = [
        'first_name', 'last_name', 'company', 'job_title', 'email', 'notes', 'sort_order',
    ];

    protected $validationRules = [
        'first_name' => 'required|min_length[2]|max_length[100]',
        'last_name'  => 'required|min_length[2]|max_length[100]',
        'company'    => 'permit_empty|max_length[255]',
        'job_title'  => 'permit_empty|max_length[255]',
        'email'      => 'permit_empty|valid_email|max_length[255]',
        'notes'      => 'permit_empty',
    ];

    protected $validationMessages = [];

    protected $skipValidation     = false;
    protected $cleanValidationRules = true;

    public function search(?string $term): self
    {
        if ($term !== null && $term !== '') {
            $this->groupStart()
                ->like('first_name', $term)
                ->orLike('last_name', $term)
                ->orLike('company', $term)
                ->orLike('notes', $term)
            ->groupEnd();
        }

        return $this;
    }

    public function filterByCompany(?string $company): self
    {
        if ($company !== null && $company !== '') {
            $this->where('company', $company);
        }

        return $this;
    }

    public function filterByJobTitle(?string $jobTitle): self
    {
        if ($jobTitle !== null && $jobTitle !== '') {
            $this->where('job_title', $jobTitle);
        }

        return $this;
    }
}
