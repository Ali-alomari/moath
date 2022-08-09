<div class="modal fade modal-delete-{{ $Cat->id }}" id="#deletemodel-{{ $Cat->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#deletemodel-{{ $Cat->id }}">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('category.destroy', $Cat->id) }} " method="POST">
                @method('DELETE')
                @csrf
                <input type="hidden" name="CatId" value="{{ $Cat->id }}">
                <div class="modal-body">
                    <h3 style="text-danger">Are you Sure To Delete</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cansel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
            </form>
        </div>
    </div>
</div>
