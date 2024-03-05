# Database key types

## Prefixes

Database keys are transmitted in variables with `k_` prefix.

## Types

There are two possible types of database keys: 64-bit unsigned integers and 22-character strings.

Character keys conform the following format: `^[a-zA-Z0-9]{22}$`.

Type declarations in MySQL:

    k_example bigint unsigned
    k_example binary(22)

## Other types

Other types are not used for keys.

Do not use 32-bit or signed database columns to store database keys.
Our production database has keys greater than can be stored in 32-bit integers.
