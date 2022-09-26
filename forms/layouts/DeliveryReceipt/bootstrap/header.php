<div class="header-div container">
    <div class="padder">
        <div class="content">
            <div style="text-align: center; padding-top: 15px; padding-bottom: 10px; font-size: 2.8em; font-weight: bold; color: <?= $formModel->colors['color1'] ?>;">
                <span>
                    <?= $formModel->header->title ?>
                </span>
            </div>
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2" style="vertical-align: bottom; width: 50%; padding-bottom: 10px;">
                                <div>
                                    <table style="width: 65%; font-size: 1.4em; border: 1px solid black;">
                                        <tr>
                                            <th style="background-color: <?= $formModel->colors['color2'] ?>; color: white; text-align: left;">
                                                <div>
                                                    <span>
                                                        DELIVERY TO :
                                                    </span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <span>
                                                        <?= $formModel->header->customerName ?> <br>
                                                        <?= $formModel->header->contactPerson ?> <br>
                                                        <?= $formModel->header->streetAddress ?> <br>
                                                        <?= $formModel->header->city ?>, <?= $formModel->header->country ?>, <?= $formModel->header->zip ?> <br>
                                                        <?= $formModel->header->customerTin ?> <br>
                                                        <?= $formModel->header->customerContactNo ?> <br>
                                                        <?= $formModel->header->faxNo ?>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                            <td style="text-align: right; width: 50%;">
                                <div style="margin-bottom: 100px;">
                                    <table style="table-layout: auto; width: 70%; text-align: center; font-size: 1.1em;">
                                        <tr>
                                            <th style="border: 0.5px solid black; border-bottom: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; text-align: left;">
                                                <span style="color: white;">
                                                    Payment Terms
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black; width: 50%;">
                                                <span>
                                                    <?= $formModel->header->paymentTerms ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border: 0.5px solid black; border-top: 0.5px solid white; border-bottom: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; text-align: left;">
                                                <span style="color: white;">
                                                    Delivery Date
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black; width: 50%;">
                                                <span>
                                                    <?= $formModel->header->deliveryDate ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border: 0.5px solid black; border-top: 0.5px solid white; background-color: <?= $formModel->colors['color2'] ?>; text-align: left;">
                                                <span style="color: white;">
                                                    Due Date
                                                </span>
                                            </th>
                                            <td style="border: 0.5px solid black; width: 50%;">
                                                <span>
                                                    <?= $formModel->header->dueDate ?>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: bottom; text-align: right; padding-right: 30px;">
                                <div style="font-size: 2em; font-weight: bold; color: <?= $formModel->colors['color1'] ?>;">
                                    <span>NO. <?= $formModel->header->documentNumber ?></span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>