# Upgrading from 1.x to 2.x

## Updating dependencies

```
composer require jubeki/nova-card-linkable:^2.0
```

## Moving Cards From NovaServiceProvider to Dashboard

In Nova 3 there was only on dashboard with cards. You need to move your cards to the new Dashboard where you want to add them.

## Uprading the Cards

### Linkable

You have nothing todo

### Linkable Away

You have nothing todo.

### Linkable Router

Because Nova 4 uses the Inertia Router instead of the Vue Router, you will need to change the url:

<!-- TODO: Upgrade how Router from Vue to Inertia -->
