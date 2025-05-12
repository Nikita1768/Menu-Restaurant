<a href="{{ route('admin.'.str(class_basename($model))->snake()->lower()->plural().'.edit',
 [str(class_basename($model))->snake()->lower()->toString() => $model]) }}" class="btn btn-sm btn-default">
    <i class="fas fa-edit"></i>
</a>
