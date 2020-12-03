<?php 

namespace Helpers;

use RuntimeException;

/**
 * Trait SlugNome
 */
trait SlugNome
{
    /**
     * @return string
     */
    public function slug() : string
    {

        if (!property_exists($this, 'nome')) {
            throw new RuntimeException('Faltando o atributo nome para o retorno do slug.');
        }

        return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->nome));
    }
}
