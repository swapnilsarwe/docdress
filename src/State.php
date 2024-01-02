<?php

namespace Docdress;

class State
{
    final public const MISSING = 'missing';
    final public const UP_TO_DATE = 'up-to-date';
    final public const NEED_TO_PULL = 'need-to-pull';
    final public const NEED_TO_PUSH = 'need-to-push';
    final public const DIVERGE = 'diverge';
}
