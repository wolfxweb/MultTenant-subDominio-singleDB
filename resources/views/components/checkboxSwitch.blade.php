<div class="form-check form-check-inline p-1">
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" wire:model='{{$wireModel}}'>
        <label class="form-check-label" for="flexSwitchCheckDefault">{{$titulo}}  - <span class=" {{ $ativarClasse? $$wireModel? ' border  border-success   bg-success text-white' : ' border  border-danger bg-danger text-white':''}} ">  {{$$wireModel? $msg1: $msg2 }}</span>  </label>
    </div>
</div>
