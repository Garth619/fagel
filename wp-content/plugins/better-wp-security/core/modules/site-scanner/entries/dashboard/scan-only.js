/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { createInterpolateElement } from '@wordpress/element';
import { Modal } from '@wordpress/components';
import { compose, withState } from '@wordpress/compose';

/**
 * Internal dependencies
 */
import {
	CardHeader,
	CardHeaderTitle,
	CardFooterSchemaActions,
} from '@ithemes/security.dashboard.dashboard';
import { SiteScanResults } from '@ithemes/security-components';

function ScanOnly( { card, config, scanResults, setState } ) {
	return (
		<div className="itsec-card--type-malware-scan itsec-card--type-malware--scan-only">
			<CardHeader>
				<CardHeaderTitle card={ card } config={ config } />
			</CardHeader>
			<section className="itsec-card-malware-scan__description">
				<p>
					{ createInterpolateElement(
						__(
							'This <a>site scan is powered by iThemes</a>. We use several datapoints to check for known malware, blocklist status, website errors and out-of-date software. These datapoints are not 100% accurate, but we try our best to provide thorough results.',
							'better-wp-security'
						),
						{
							a: (
								// eslint-disable-next-line jsx-a11y/anchor-has-content
								<a href="https://help.ithemes.com/hc/en-us/articles/360046334433" />
							),
						}
					) }
				</p>
				<p>
					{ __(
						'Enable Database Logging to see a history of completed Site Scans.',
						'better-wp-security'
					) }
				</p>
			</section>
			<CardFooterSchemaActions
				card={ card }
				onComplete={ ( href, response ) =>
					href.endsWith( '/scan' ) &&
					setState( { scanResults: response } )
				}
			/>
			{ scanResults && (
				<Modal
					title={ __( 'Scan Results', 'better-wp-security' ) }
					onRequestClose={ () =>
						setState( { scanResults: undefined } )
					}
				>
					<SiteScanResults
						results={ scanResults }
						showSiteUrl={ false }
					/>
				</Modal>
			) }
		</div>
	);
}

export default compose( [ withState( { scanResults: undefined } ) ] )(
	ScanOnly
);
