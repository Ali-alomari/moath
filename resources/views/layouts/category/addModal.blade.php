<div class="modal fade modal-full modal-add" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <button aria-label="" type="button" class="close px-2" data-dismiss="modal" aria-hidden="true">
        <span aria-hidden="true">×</span>
    </button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name AR</label>
                                <input type="text" name="nameAR" class="form-control" id="inputEmail4"
                                    placeholder="name AR">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">name EN</label>
                                <input type="text" name="nameEN" class="form-control" id="inputEmail4"
                                    placeholder="name EN">
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

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck"> Check me out </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
