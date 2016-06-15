<?php

/*
 * This file is part of the "rest demo app" package.
 *
 * (c) GLAVWEB <info@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Admin\Movie;

use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use AppBundle\Admin\MovieSessionAdmin as BaseMovieSessionAdmin;

/**
 * Class MovieSessionAdmin
 *
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
class MovieSessionAdmin extends BaseMovieSessionAdmin
{
    /**
     * The related field reflection, ie if OrderElement is linked to Order,
     * then the $parentReflectionProperty must be the ReflectionProperty of
     * the order (OrderElement::$order)
     *
     * @var \ReflectionProperty $parentReflectionProperty
     */
    protected $parentAssociationMapping = 'movie';

    /**
     * The base route pattern used to generate the routing information
     *
     * @var string
     */
    protected $baseRoutePattern = 'movie-child-session';

    /**
     * The base route name used to generate the routing information
     *
     * @var string
     */
    protected $baseRouteName = 'movie_child_session';

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        parent::configureDatagridFilters($datagridMapper);

        $datagridMapper->remove('movie');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper);

        $listMapper->remove('movie');
    }
}
