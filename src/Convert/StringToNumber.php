<?php
declare(strict_types=1);

namespace Nm\Convert;

class StringToNumber
{
    /**
     * Constants for token types
     */
    public const TYPE_TERMINAL   = 0;
    public const TYPE_IGNORE     = 1;
    public const TYPE_TENNER     = 2;
    public const TYPE_MULTIPLIER = 3;

    /**
     * Holds temporary values that can't yet be committed to the final result
     * @var int
     */
    protected $temp = 0;
    /**
     * This is where the final result accumulates
     * @var int
     */
    protected $final = 0;
    /**
     * Incoming token stream
     * @var array
     */
    protected $tokenStream = [];
    /**
     * Internal reference for current place in token stream
     * @var int
     */
    protected $internalCounter = 0;

    /**
     * List of tokens that could be encountered in an input string
     * @var array
     */
    protected $tokens;

    /**
     * Constructs the class and converts the input to a token stream
     */
    public function __construct(array $tokens, string $input)
    {
        $this->tokens = $tokens;
        $this->tokenize(strtolower($input));
    }

    /**
     * This is where the magic happens
     * It iterates over the token stream and parses the input, resulting in a number
     * @return string
     * @throws Exception\ConverterException
     */
    public function convert(): string
    {
        foreach ($this->getTokens() as $token => $data) {
            switch ($data['type']) {
                case self::TYPE_IGNORE:
                    continue 2;

                case self::TYPE_TERMINAL:
                    $this->temp += $data['value'];

                    break;

                case self::TYPE_TENNER:
                    $peek = $this->peek();
                    if ($peek === null) {
                        $this->final += $data['value'] + $this->temp;
                        $this->temp  = 0;
                    } else {
                        $this->temp += $data['value'];
                    }

                    break;

                case self::TYPE_MULTIPLIER:
                    if ($this->temp === 0) {
                        $this->temp = 1;
                    }
                    if ($data['committing']) {
                        $this->final += $this->temp * $data['value'];
                        $this->temp  = 0;
                    } else {
                        $this->temp *= $data['value'];
                    }

                    break;

                default:
                    throw new Exception\ConverterException('Unknown token type encountered: ' . $data['type']);
            }
        }

        $this->final += $this->temp;

        return number_format($this->final, 0, ',', '.');
    }

    /**
     * yields tokens until stream depleted
     * @return iterable
     */
    protected function getTokens(): iterable
    {
        while ($this->internalCounter < count($this->tokenStream)) {
            $token = $this->tokenStream[$this->internalCounter++];
            yield $token => $this->tokens[$token];
        }
    }

    /**
     * Tokenizes the input string
     * Example:
     * tokenize("honderdachtentwintig") => ["honderd", "acht", "en", "twintig"]
     * @param string $input
     */
    protected function tokenize(string $input): void
    {
        $tokens = array_keys($this->tokens);
        usort($tokens, function (string $a, string $b) {
            if (strlen($a) === strlen($b)) {
                return 0;
            }
            return strlen($a) > strlen($b) ? -1 : 1;
        });

        for ($x = strlen($input); $x > 0; $x--) {
            $testString = trim(substr($input, 0, $x));
            foreach ($tokens as $token) {
                if ($token === $testString) {
                    $this->tokenStream[] = $token;
                    $this->tokenize(trim(substr($input, strlen($token))));
                    break 2;
                }
            }
        }
    }

    /**
     * Peeks at the next token from the stream
     * @return array|null
     */
    protected function peek(): ?array
    {
        if (isset($this->tokenStream[$this->internalCounter])) {
            return $this->tokens[$this->tokenStream[$this->internalCounter]];
        }
        return null;
    }
}
