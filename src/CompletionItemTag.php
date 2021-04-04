<?php

namespace LanguageServerProtocol;

/**
 * Completion item tags are extra annotations that tweak the rendering of a
 * completion item.
 */
abstract class CompletionItemTag
{
    /**
     * Render a completion as obsolete, usually using a strike-out.
     */
    const DEPRECATED = 1;
}
