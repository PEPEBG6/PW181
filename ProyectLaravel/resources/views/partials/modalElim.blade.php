<!-- Modal -->
<div class="modal fade" id="eliminar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

            <form method='POST' action='/recuerdo/{{$item->id}}/confirm'>
                    @csrf 
                    {!! method_field('DELETE') !!}
                    
                    <div class="mb-3">
                        <label class="form-label">Titulo</label>
                        <p class="text-danger fw-bold">{{$errors->first('txtTitulo')}}</p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Recuerdo</label>
                        <p class="text-danger fw-bold">{{$errors->first('txtRecuerdo')}}</p>
                    </div>
                    
                        
                    
                    
                    
                    
                    
                    
            </div>

                <div class="modal-footer">
                    <div class="card-footer text-body-secondary">
                        <button type="submit" class="btn btn-outline-warning">Eliminar Recuerdo</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>