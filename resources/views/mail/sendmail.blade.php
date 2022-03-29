@foreach ($dominios as $dominio)
    
    <h2>Olá Suporte,</h2>

    <h2>Os seguintes Certificados SSL irão expirar nos próximos 15 dias:</h2>
        <table style="border: 1px solid black;">
        <tbody>
            <tr>
                <th><span style="font-weight:400;font-style:normal"><strong>Domínio:</strong></th>
                <th><span style="font-weight:400;font-style:normal">{{ $dominio->dominio }}</th>
              </tr>
          <tr>
            <td><span style="font-weight:400;font-style:normal"><strong>Tipo:</strong></span></td>
            <td><span style="font-weight:400;font-style:normal">{{ $dominio->tipo }}</span></td>
          </tr>
          <tr>
            <td><span style="font-weight:400;font-style:normal"><strong>Expira em:</strong></span></td>
            <td><span style="font-weight:400;font-style:normal">{{ $dominio->expiracao }}</span></td>
          </tr>
        </tbody>
        </table>
@endforeach