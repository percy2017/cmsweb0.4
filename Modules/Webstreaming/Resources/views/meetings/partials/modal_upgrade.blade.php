<form id="form_petition" action="{{ route('user_petition') }}" method="POST">
    <div class="modal fade" id="modal_upgrade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitar cambio de plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $suscription_id }}">
                        <input type="hidden" name="type" value="upgrade">
                        <input type="hidden" name="ajax" value="1">
                        <label for="">Plan</label>
                        <select name="plan_id" class="form-control" required>
                            <option value="" disabled>Elige tu plan</option>
                            @foreach (Modules\Webstreaming\Entities\Plan::all() as $item)
                                <option @if($suscription->hs_plan_id==$item->id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info" id="btn-petition">Solicitar</button>
                </div>
            </div>
        </div>
    </div>
</form>