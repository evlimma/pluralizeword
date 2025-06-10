<?php

namespace evlimma\PluralizeWord;

class PluralizeWord
{
    /**
     * Checa os parametros e retorna o plural tratado
     *
     * @param integer $number
     * @param string $word
     * @param boolean $includeNumber
     */
    public static function format(int $number, string $word, bool $includeNumber = true)
    {
        $finalWord = self::pluralizeWord($number, $word);
        return $includeNumber ? "{$number} {$finalWord}" : $finalWord;
    }

    /**
     * Verifica plural padrão ou exceções exatas
     *
     * @param integer $number
     * @param string $word
     * @return string
     */
    public static function pluralizeWord(int $number, string $word): string
    {
        if ($number <= 1) return $word;

        $exceptions = [
            'pão' => 'pães',
            'cão' => 'cães',
            'alemão' => 'alemães',
            'charlatão' => 'charlatães',
            'capitão' => 'capitães',
            'mal' => 'males',
            'cal' => 'cais',
            'foi' => 'foram',
        ];

        if (isset($exceptions[$word])) {
            return $exceptions[$word];
        }

        if (preg_match('/[aeiou]$/i', $word)) return $word . 's';
        if (preg_match('/r$|s$|z$/i', $word)) return $word . 'es';
        if (preg_match('/al$/i', $word)) return preg_replace('/al$/i', 'ais', $word);
        if (preg_match('/el$/i', $word)) return preg_replace('/el$/i', 'éis', $word);
        if (preg_match('/ol$/i', $word)) return preg_replace('/ol$/i', 'óis', $word);
        if (preg_match('/ul$/i', $word)) return preg_replace('/ul$/i', 'uis', $word);
        if (preg_match('/il$/i', $word)) return preg_replace('/il$/i', 'is', $word);
        if (preg_match('/m$/i', $word)) return preg_replace('/m$/i', 'ns', $word);
        if (preg_match('/ão$/i', $word)) return preg_replace('/ão$/i', 'ões', $word); // regra genérica para ão

        return $word . 's';
    }
}
