<html>
    <div style=' width:500px'>
{$I18n->__('Welcome, ')}<strong>{$name}</strong>
        <br/>
{$I18n->__('Status:')}{$status|escape}
        <br/>
    {$email|escape:'mail'}
    </div>

</html>