<!-- resources/views/symbol-picker.blade.php -->
<div>
    <!-- Hidden input with Livewire binding -->
    <input
        type="hidden"
        id="{{ $getId() }}"
        name="{{ $getName() }}"
        wire:model="{{ $getStatePath() }}"
        value="{{ $getState() }}"
    />

    <!-- Single Collapsible Section for All Symbols -->
    <details class="group mb-2">
        <summary class="flex items-center justify-between p-2 bg-gray-100 dark:bg-gray-700 rounded cursor-pointer">
            <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">Show/Hide All Symbols</span>
            <span class="transform transition-transform group-open:rotate-180">▼</span>
        </summary>
        <div class="flex flex-col gap-2 p-2">
            <!-- Greek Letters -->
            <div class="flex flex-wrap gap-2">
                <h4 class="w-full text-lg font-semibold text-gray-800 dark:text-gray-200"></h4>
                @foreach(['α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω', 'Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω'] as $symbol)
                    <button
                        type="button"
                        class="fi-btn px-2 py-1 rounded bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200"
                        onclick="insertSymbol('{{ $symbol }}')"
                    >
                        {{ $symbol }}
                    </button>
                @endforeach
            </div>

            <!-- Basic Math Symbols -->
            <div class="flex flex-wrap gap-2">
                <h4 class="w-full text-lg font-semibold text-gray-800 dark:text-gray-200"></h4>
                @foreach(['+', '-', '×', '÷', '=', '≠', '≈', '≡', '≅', '∼', '∝', '±', '∓', '√', '∛', '∜', '∫', '∬', '∭', '∮', '∯', '∰', '∇', '∂', '∆'] as $symbol)
                    <button
                        type="button"
                        class="fi-btn px-2 py-1 rounded bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200"
                        onclick="insertSymbol('{{ $symbol }}')"
                    >
                        {{ $symbol }}
                    </button>
                @endforeach
            </div>

            <!-- Comparison Symbols -->
            <div class="flex flex-wrap gap-2">
                <h4 class="w-full text-lg font-semibold text-gray-800 dark:text-gray-200"></h4>
                @foreach(['<', '>', '≤', '≥', '≪', '≫', '≲', '≳', '≶', '≷','∈', '∉', '⊂', '⊃', '⊆', '⊇', '∪', '∩', '∅', '∖', '∆', '⊕', '⊗'] as $symbol)
                    <button
                        type="button"
                        class="fi-btn px-2 py-1 rounded bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200"
                        onclick="insertSymbol('{{ $symbol }}')"
                    >
                        {{ $symbol }}
                    </button>
                @endforeach
            </div>

            <!-- Logic Symbols -->
            <div class="flex flex-wrap gap-2">
                <h4 class="w-full text-lg font-semibold text-gray-800 dark:text-gray-200"></h4>
                @foreach(['∧', '∨', '¬', '⊕', '∀', '∃', '∴', '∵', '⊤', '⊥', '⊢', '⊨','∞', '∑', '∏', '∐', '∫', '∬', '∭', '∮', '∯', '∰', '∇', '∂', '∆', '∎', '∏', '∐'] as $symbol)
                    <button
                        type="button"
                        class="fi-btn px-2 py-1 rounded bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200"
                        onclick="insertSymbol('{{ $symbol }}')"
                    >
                        {{ $symbol }}
                    </button>
                @endforeach
            </div>

            <!-- Geometry Symbols -->
            <div class="flex flex-wrap gap-2">
                <h4 class="w-full text-lg font-semibold text-gray-800 dark:text-gray-200"></h4>
                @foreach(['∠', '∡', '∢', '⊥', '∥', '≅', '∼', '≃', '≅', '≇', '≉','ℵ', 'ℶ', 'ℷ', 'ℸ', 'ℕ', 'ℤ', 'ℚ', 'ℝ', 'ℂ', 'ℙ', 'ℍ', 'ℏ', 'ℑ', 'ℜ', '℘', 'ℯ', 'ℇ', 'ℾ', 'ℿ', '⅀'] as $symbol)
                    <button
                        type="button"
                        class="fi-btn px-2 py-1 rounded bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200"
                        onclick="insertSymbol('{{ $symbol }}')"
                    >
                        {{ $symbol }}
                    </button>
                @endforeach
            </div>

            <!-- Subscripts and Superscripts -->
            <div class="flex flex-wrap gap-2">
                <h4 class="w-full text-lg font-semibold text-gray-800 dark:text-gray-200"></h4>
                @foreach(['₀', '₁', '₂', '₃', '₄', '₅', '₆', '₇', '₈', '₉', '⁰', '¹', '²', '³', '⁴', '⁵', '⁶', '⁷', '⁸', '⁹'] as $symbol)
                    <button
                        type="button"
                        class="fi-btn px-2 py-1 rounded bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200"
                        onclick="insertSymbol('{{ $symbol }}')"
                    >
                        {{ $symbol }}
                    </button>
                @endforeach
            </div>
        </div>
    </details>

    <textarea
        id="question-input"
        class="fi-input w-full rounded bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 border-gray-300 dark:border-gray-600 resize-y"
        rows="5"
        oninput="updateHiddenInput(this)"
    >{{ $getState() }}</textarea>
</div>

<script>
    function insertSymbol(symbol) {
        const input = document.getElementById('question-input');
        const startPos = input.selectionStart;
        const endPos = input.selectionEnd;
        const value = input.value;

        input.value = value.substring(0, startPos) + symbol + value.substring(endPos);
        input.focus();
        input.setSelectionRange(startPos + symbol.length, startPos + symbol.length);
        updateHiddenInput(input); // Ensure this is called
    }

    function updateHiddenInput(textarea) {
        const hiddenInput = document.getElementById('{{ $getId() }}');
        hiddenInput.value = textarea.value;
        // Dispatch an event to notify Livewire of the change
        hiddenInput.dispatchEvent(new Event('input'));
    }
</script>
