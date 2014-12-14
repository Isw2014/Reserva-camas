<?php
class MiFiltroUsuario implements ICrugeUserFilter
{
    public function canInsert(ICrugeStoredUser $model)
    {
        // si hay algun error, retornar false y reportar el error asi:
        // $model->addError('','algun error');
        return true;
    }

    public function canUpdate(ICrugeStoredUser $model)
    {
        // si hay algun error, retornar false y reportar el error asi:
        // $model->addError('','algun error');
        return true;
    }
}
?>