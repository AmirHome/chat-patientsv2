<div class="form-group col-sm-12">
    <div class="alert alert-danger form-group col-sm-12" style="display: none" id="editValidationErrorsBox"></div>
</div>
<div class="form-group col-md-6 col-sm-12 login-group__sub-title">
    {{ Form::label('name', __('messages.name').':') }}<span class="red">*</span>
    {{ Form::text('name', null, ['class' => 'form-control login-group__input', 'id' => 'edit_role_name', 'required','placeholder'=>__('messages.name')]) }}
</div>
<div class="form-group col-md-6 col-sm-12">
{{ Form::label('permissions', __('messages.permissions').':', ['class' => 'login-group__sub-title']) }}<span class="red">*</span>
<br>
<div class="row px-3">
    @foreach($permissions->get() as $permission)
        <div class="custom-control custom-checkbox mb-2">
            <input id="{{ $permission->title }}" class="custom-control-input not-checkbox role-permission"
                   type="checkbox" name="permissions[]"
                   value="{{ $permission->title }}" {{ (isset($role) && in_array($permission->title,$role->getAllPermissions()->pluck('name')->toArray())) ? 'checked' : '' }} >
            <label for="{{ $permission->title }}" class="custom-control-label">{{ $permission->display_name }}</label>
        </div>
    @endforeach
</div>
</div>
<div class="text-start form-group col-sm-12">
    {{ Form::button(__('messages.save') , ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> " .__('messages.processing')]) }}
    <a type="button" href="{{ route('roles.index') }}" id="btnCancelEdit"
       class="btn btn-secondary close_edit_role ms-1">{{ __('messages.cancel') }}
    </a>
</div>
