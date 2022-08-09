<div class="modal fade modal-full modal-edit-{{ $Cat->id }}"  id="EditModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <button aria-label="" type="button" class="close px-2" data-dismiss="modal" aria-hidden="true">
        <span aria-hidden="true">×</span>
    </button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Edit Category</h1>
            </div>
            <div class="modal-body text-center">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('category.update', $Cat->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name AR</label>
                                <input type="text" name="nameAR" class="form-control" id="inputEmail4"
                                    placeholder="name AR" value="{{ $Cat->getTranslation('name','ar') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">name EN</label>
                                <input type="text" name="nameEN" class="form-control" id="inputEmail4"
                                    placeholder="name EN" value="{{ $Cat->getTranslation('name','en') }}">
                            </div>
                        </div>
                        <div class="form-row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Descripton Arabic</label>

                                <textarea name="descriptionAR" placeholder="اي شيء" cols="20" rows="10"></textarea>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Descripton English</label>

                                <textarea name="descriptionEN" placeholder="any thing" cols="20" rows="10"></textarea>

                            </div>
                            <button type="button" class="btn btn-danger">Close</button>

                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
