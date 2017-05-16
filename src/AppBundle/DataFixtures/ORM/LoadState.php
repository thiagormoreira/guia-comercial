<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use AppBundle\Entity\State;

/**
 * Generated by Webonaute\DoctrineFixtureGenerator.
 *
 */
class LoadState extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Set loading order.
     *
     * @return int
     */
    public function getOrder()
    {
        return ;
    }


    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $manager->getClassMetadata(State::class)->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
    
        $item1 = new State();
        $item1->setName("Acre");
        $item1->setUf("AC");
        $this->addReference('_reference_AppBundleEntityState1', $item1);
        $manager->persist($item1);

        $item2 = new State();
        $item2->setName("Alagoas");
        $item2->setUf("AL");
        $this->addReference('_reference_AppBundleEntityState2', $item2);
        $manager->persist($item2);

        $item3 = new State();
        $item3->setName("Amazonas");
        $item3->setUf("AM");
        $this->addReference('_reference_AppBundleEntityState3', $item3);
        $manager->persist($item3);

        $item4 = new State();
        $item4->setName("Amapá");
        $item4->setUf("AP");
        $this->addReference('_reference_AppBundleEntityState4', $item4);
        $manager->persist($item4);

        $item5 = new State();
        $item5->setName("Bahia");
        $item5->setUf("BA");
        $this->addReference('_reference_AppBundleEntityState5', $item5);
        $manager->persist($item5);

        $item6 = new State();
        $item6->setName("Ceará");
        $item6->setUf("CE");
        $this->addReference('_reference_AppBundleEntityState6', $item6);
        $manager->persist($item6);

        $item7 = new State();
        $item7->setName("Distrito Federal");
        $item7->setUf("DF");
        $this->addReference('_reference_AppBundleEntityState7', $item7);
        $manager->persist($item7);

        $item8 = new State();
        $item8->setName("Espírito Santo");
        $item8->setUf("ES");
        $this->addReference('_reference_AppBundleEntityState8', $item8);
        $manager->persist($item8);

        $item9 = new State();
        $item9->setName("Goiás");
        $item9->setUf("GO");
        $this->addReference('_reference_AppBundleEntityState9', $item9);
        $manager->persist($item9);

        $item10 = new State();
        $item10->setName("Maranhão");
        $item10->setUf("MA");
        $this->addReference('_reference_AppBundleEntityState10', $item10);
        $manager->persist($item10);

        $item11 = new State();
        $item11->setName("Minas Gerais");
        $item11->setUf("MG");
        $this->addReference('_reference_AppBundleEntityState11', $item11);
        $manager->persist($item11);

        $item12 = new State();
        $item12->setName("Mato Grosso do Sul");
        $item12->setUf("MS");
        $this->addReference('_reference_AppBundleEntityState12', $item12);
        $manager->persist($item12);

        $item13 = new State();
        $item13->setName("Mato Grosso");
        $item13->setUf("MT");
        $this->addReference('_reference_AppBundleEntityState13', $item13);
        $manager->persist($item13);

        $item14 = new State();
        $item14->setName("Pará");
        $item14->setUf("PA");
        $this->addReference('_reference_AppBundleEntityState14', $item14);
        $manager->persist($item14);

        $item15 = new State();
        $item15->setName("Paraíba");
        $item15->setUf("PB");
        $this->addReference('_reference_AppBundleEntityState15', $item15);
        $manager->persist($item15);

        $item16 = new State();
        $item16->setName("Pernambuco");
        $item16->setUf("PE");
        $this->addReference('_reference_AppBundleEntityState16', $item16);
        $manager->persist($item16);

        $item17 = new State();
        $item17->setName("Piauí");
        $item17->setUf("PI");
        $this->addReference('_reference_AppBundleEntityState17', $item17);
        $manager->persist($item17);

        $item18 = new State();
        $item18->setName("Paraná");
        $item18->setUf("PR");
        $this->addReference('_reference_AppBundleEntityState18', $item18);
        $manager->persist($item18);

        $item19 = new State();
        $item19->setName("Rio de Janeiro");
        $item19->setUf("RJ");
        $this->addReference('_reference_AppBundleEntityState19', $item19);
        $manager->persist($item19);

        $item20 = new State();
        $item20->setName("Rio Grande do Norte");
        $item20->setUf("RN");
        $this->addReference('_reference_AppBundleEntityState20', $item20);
        $manager->persist($item20);

        $item21 = new State();
        $item21->setName("Rondônia");
        $item21->setUf("RO");
        $this->addReference('_reference_AppBundleEntityState21', $item21);
        $manager->persist($item21);

        $item22 = new State();
        $item22->setName("Roraima");
        $item22->setUf("RR");
        $this->addReference('_reference_AppBundleEntityState22', $item22);
        $manager->persist($item22);

        $item23 = new State();
        $item23->setName("Rio Grande do Sul");
        $item23->setUf("RS");
        $this->addReference('_reference_AppBundleEntityState23', $item23);
        $manager->persist($item23);

        $item24 = new State();
        $item24->setName("Santa Catarina");
        $item24->setUf("SC");
        $this->addReference('_reference_AppBundleEntityState24', $item24);
        $manager->persist($item24);

        $item25 = new State();
        $item25->setName("Sergipe");
        $item25->setUf("SE");
        $this->addReference('_reference_AppBundleEntityState25', $item25);
        $manager->persist($item25);

        $item26 = new State();
        $item26->setName("São Paulo");
        $item26->setUf("SP");
        $this->addReference('_reference_AppBundleEntityState26', $item26);
        $manager->persist($item26);

        $item27 = new State();
        $item27->setName("Tocantins");
        $item27->setUf("TO");
        $this->addReference('_reference_AppBundleEntityState27', $item27);
        $manager->persist($item27);

    
        $manager->flush();
    }

}
