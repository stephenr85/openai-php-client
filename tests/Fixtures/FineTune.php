<?php

/**
 * @return array<string, mixed>
 */
function fineTuneResource(): array
{
    return [
        'id' => 'ft-AF1WoRqd3aJAHsqc9NY7iL8F',
        'object' => 'fine-tune',
        'model' => 'curie',
        'created_at' => 1614807352,
        'events' => [
            fineTuneEventResource(),
            fineTuneEventResource(),
        ],
        'fine_tuned_model' => 'curie => ft-acmeco-2021-03-03-21-44-20',
        'hyperparams' => [
            'batch_size' => 4,
            'learning_rate_multiplier' => 0.1,
            'n_epochs' => 4,
            'prompt_loss_weight' => 0.1,
        ],
        'organization_id' => 'org-jwe45798ASN82s',
        'result_files' => [
            fileResource(),
            fileResource(),
        ],
        'status' => 'succeeded',
        'validation_files' => [],
        'training_files' => [
            fileResource(),
            fileResource(),
        ],
        'updated_at' => 1614807865,
    ];
}

/**
 * @return array<string, mixed>
 */
function fineTuneEventResource(): array
{
    return [
        'object' => 'fine-tune-event',
        'created_at' => 1614807352,
        'level' => 'info',
        'message' => 'Job enqueued. Waiting for jobs ahead to complete. Queue number =>  0.',
    ];
}