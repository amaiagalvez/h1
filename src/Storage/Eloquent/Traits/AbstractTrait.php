<?php

namespace Izt\Helpers\Storage\Eloquent\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

trait AbstractTrait
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->created_by = $user->id;
            }
        });

        static::created(function ($model) {
            Session::flash('successMessage', trans('helpers::action.store_successfully'));
        });

        static::updating(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->updated_by = $user->id;
            }
        });

        static::updated(function ($model) {
            Session::flash('successMessage', trans('helpers::action.update_successfully'));
        });

        static::restoring(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->updated_by = $user->id;
            }
        });

        static::restored(function ($model) {
            Session::flash('successMessage', trans('helpers::action.restore_successfully'));
        });

        static::deleting(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->deleted_by = $user->id;
                $model->save();
            }
        });

        static::deleted(function ($model) {
            Session::flash('successMessage', trans('helpers::action.delete_successfully'));
        });
    }

    public function createdBy()
    {
        return $this->belongsTo(config('helpers.user'), 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(config('helpers.user'), 'updated_by');
    }

    public function deletedBy()
    {
        return $this->belongsTo(config('helpers.user'), 'deleted_by');
    }
}
