@props(['theme', 'column', 'customAttributes' => []])

@if ($theme === 'tailwind')
    <th scope="col" {{
        $attributes->merge($customAttributes)
            ->class(['px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:bg-gray-800' => $customAttributes['default'] ?? true])
            ->except('default')
    }}>
        {{ $column->getTitle() }}
    </th>
@elseif ($theme === 'bootstrap-4')

@elseif ($theme === 'bootstrap-5')

@endif
